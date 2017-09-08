<?php

namespace AppBundle\Controller\Admin;

use JavierEguiluz\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;

class ArticleController extends BaseAdminController
{
    public function prePersistEntity($entity)
    {
        $slug = $this->get('cocur_slugify')->slugify($entity->getTitle());
        $entity->setSlug($slug);
        $entity->setUser($this->getUser());
        parent::prePersistEntity($entity);
    }
}