<?php

namespace AppBundle\Services;

use AppBundle\Entity\Comment;
use AppBundle\Entity\Contact;
use Doctrine\ORM\EntityManager;

class AntiSpam
{
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function checkContactPost(Contact $contact)
    {
        $repo = $this->em->getRepository('AppBundle:Contact');

        return count($repo->getLastContacts($contact->getIp())) > 0;
    }

    public function checkBlogCommentPost(Comment $comment)
    {
        $repo = $this->em->getRepository('AppBundle:Comment');

        return count($repo->getLastComments($comment->getIp())) > 0;
    }
}