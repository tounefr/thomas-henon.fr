<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Contact;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/cv", name="cv")
     */
    public function cvAction(Request $request)
    {
        return $this->render('default/cv.html.twig');
    }

    /**
     * @Route("/projects", name="projects")
     */
    public function projectsAction(Request $request) {

        $em = $this->getDoctrine()->getManager();

        $projects_repo = $em->getRepository('AppBundle:Project');
        $projects = $projects_repo->findBy(array(), array('id' => 'desc'));

        return $this->render('default/projects.html.twig', array(
            'projects' => $projects
        ));
    }

    /**
     * @Route("/", name="about")
     */
    public function aboutAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $article_repo = $em->getRepository('AppBundle:Article');
        $articles = $article_repo->getFilterArticle(
            $category = null,
            null,
            $page = 1,
            $nbArticlesParPage = 5
        );

        return $this->render('default/about.html.twig', array(
            'lastArticles' => $articles
        ));
    }
}
