<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Contact;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Contact controller.
 *
 * @Route("contact")
 */
class ContactController extends Controller
{
    /**
     * Creates a new contact entity.
     *
     * @Route("/", name="contact")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request, \Swift_Mailer $mailer)
    {
        $contact = new Contact();
        $form = $this->createForm('AppBundle\Form\ContactType', $contact);
        $form->handleRequest($request);

        $contact->setIp($request->getClientIp());
        $contact->setDate(new \DateTime());

        if ($form->isSubmitted() && $form->isValid()) {
            $em =    $this->getDoctrine()->getManager();

            $antispam = $this->get('appbundle.anti_spam');
            if ($antispam->checkContactPost($contact)) {
                $this->addFlash('danger',
                    'Vous ne pouvez pas envoyer un autre mail si rapidement.'
                );
            } else {
                $em->persist($contact);
                $em->flush();

                $this->get('appbundle.application_mailer')->sendContactConfirmation($contact);

                $this->addFlash('success', 'Message envoyé !');
            }
            return $this->redirectToRoute('contact', array('id' => $contact->getId()));
        }

        return $this->render('contact/new.html.twig', array(
            'contact' => $contact,
            'form' => $form->createView(),
        ));
    }
}
