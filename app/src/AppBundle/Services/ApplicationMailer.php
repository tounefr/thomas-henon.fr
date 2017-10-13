<?php

namespace AppBundle\Services;

use AppBundle\Entity\Comment;
use AppBundle\Entity\Contact;

class ApplicationMailer
{
    /**
     * @var \Swift_Mailer
     */
    private $mailer;

    public function __construct(\Swift_Mailer $mailer, $templating)
    {
        $this->mailer = $mailer;
        $this->templating = $templating;
    }

    public function sendContactConfirmation(Contact $contact)
    {
        $message = (new \Swift_Message('Nouveau message depuis le portfolio'))
            ->setFrom($contact->getEmail())
            ->setTo('contact@toune.fr')
            ->setBody(
                $this->templating->render('emails/contact/contact.html.twig', array(
                    'contact' => $contact
                )),
                'text/html'
            );
        $this->mailer->send($message);

        /*
        $message = (new \Swift_Message('Message sur le portfolio'))
            ->setFrom('noreply@thomas-henon.fr')
            ->setTo($contact->getEmail())
            ->setBody(
                $this->templating->render('emails/contact/contact_confirmation.html.twig', array(
                    'contact' => $contact
                )),
                'text/html'
            );
        $this->mailer->send($message);
        */
    }

    public function sendBlogCommentApproved(Comment $comment)
    {

    }

    public function sendBlogNewComment(Comment $comment)
    {
        $message = (new \Swift_Message('Nouveau commentaire sur le blog'))
            ->setFrom($comment->getEmail() ? $comment->getEmail() : 'noreply@thomas-henon.fr')
            ->setTo('contact@toune.fr')
            ->setBody(
                $this->templating->render('emails/blog/new_comment.html.twig', array(
                    'comment' => $comment
                )),
                'text/html'
            );
        $this->mailer->send($message);
    }
}