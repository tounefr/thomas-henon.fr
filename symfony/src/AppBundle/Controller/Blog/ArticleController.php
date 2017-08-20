<?php

namespace AppBundle\Controller\Blog;

use AppBundle\Entity\Article;
use AppBundle\Entity\Comment;
use Suin\RSSWriter\Channel;
use Suin\RSSWriter\Feed;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Suin\RSSWriter\Item;

/**
 * Class ArticleController
 * @package AppBundle\Controller\Blog
 */
class ArticleController extends Controller
{
    /**
     * Lists all article entities.
     *
     * @Route("/articles/{page}",
     *     requirements={"page" = "\d+"},
     *     name="article_index")
     * @Route("/articles/{page}/{category}",
     *     requirements={"page" = "\d+"},
     *     name="article_index")
     * @Method("GET")
     */
    public function listAction($page = 1, $category = null, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $article_repo = $em->getRepository('AppBundle:Article');

        $nbArticlesParPage = 2;
        $articles = $article_repo->getFilterArticle(
            $category,
            $page,
            $nbArticlesParPage
        );

        $pagination = array(
            'page' => $page,
            'nbPages' => ceil(count($articles) / $nbArticlesParPage),
            'nomRoute' => 'article_index',
            'paramsRoute' => array()
        );

        $categories = $em->getRepository('AppBundle:Category')->findAll();

        return $this->render('article/index.html.twig', array(
            'articles' => $articles,
            'categories' => $categories,
            'pagination' => $pagination
        ));
    }

    /**
     * @Route("/articles/rss", name="article_rss")
     */
    public function rssAction(Request $request)
    {
        $feed = new Feed();

        $channel = new Channel();
        $channel
            ->title('RSS Blog thomas-henon.fr')
            ->description('Diverses astuces et bouts de code autour du développement et l\'administration système')
            ->url($request->getSchemeAndHttpHost())
            ->feedUrl($request->getUri())
            ->language('fr-FR')
            ->copyright('Licence CC-NA')
            ->pubDate(strtotime('Tue, 21 Aug 2012 19:50:37 +0900'))
            ->lastBuildDate(strtotime('Tue, 21 Aug 2012 19:50:37 +0900'))
            ->ttl(60)
            ->appendTo($feed);

        $em = $this->getDoctrine()->getManager();
        $articles = $em->getRepository('AppBundle:Article')->findAll();

        foreach ($articles as $article) {
            $item = new Item();

            $article_url = $request->getSchemeAndHttpHost() . $this->generateUrl('article_show', [
                'id' => $article->getId(),
                'slug' => $article->getSlug()
            ]);

            $item
                ->title($article->getTitle())
                ->description('<div>Blog body</div>')
                ->contentEncoded($article->getContent())
                ->url($article_url)
                ->author($article->getUser()->getUsername())
                ->pubDate(time($article->getDate()))
                ->guid($article_url, true)
                ->preferCdata(true)// By this, title and description become CDATA wrapped HTML.
                ->appendTo($channel);
        }

        $response = new Response($feed);
        $response->headers->set('Content-Type', 'xml');

        return $response;
    }

    /**
     * Finds and displays a article entity.
     *
     * @Route("/{id}/{slug}", name="article_show")
     * @Method({"GET", "POST"})
     */
    public function showAction(Article $article, Request $request, \Swift_Mailer $mailer)
    {
        $article_url = $request->getUri();
        $em = $this->getDoctrine()->getManager();

        $categories = $em->getRepository('AppBundle:Category')->findAll();

        $comment = new Comment();
        $comment->setArticle($article);

        $form = $this->get('form.factory')->createBuilder(FormType::class, $comment)
                    ->add('pseudo', TextType::class)
                    ->add('email', EmailType::class)
                    ->add('comment', TextareaType::class)
                    /*->add('alert_me', CheckboxType::class)*/
                    ->getForm();

        if ($request->isMethod('POST')) {
            $form->handleRequest($request);

            if ($form->isValid()) {
                $comment->setIp($request->getClientIp());
                $antispam = $this->get('appbundle.anti_spam');
                if ($antispam->checkBlogCommentPost($comment)) {
                    $this->addFlash('danger', 'Veuillez attendre avant de pouvoir poster un nouveau commentaire');
                } else {
                    $em->persist($comment);
                    $em->flush();

                    $email_service = $this->get('appbundle.application_mailer');
                    $email_service->sendBlogNewComment($comment);

                    $this->addFlash('success', 'Votre commentaire a bien été posté ! Il sera disponible après approbation.');
                }
                return $this->redirect($article_url);
            }
        }

        return $this->render('article/show.html.twig', array(
            'article' => $article,
            'categories' => $categories,
            'new_comment_form' => $form->createView()
        ));
    }
}
