<?php

namespace AppBundle\Controller\Admin;
use AppBundle\Entity\User;
use JavierEguiluz\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;

class UserController extends BaseAdminController
{
    public function createNewUsersEntity()
    {
        return $this->container->get('fos_user.user_manager')->createUser();
    }

    public function prePersistUsersEntity(User $user)
    {
        $this->container->get('fos_user.user_manager')->updateUser($user, false);
    }

    public function preUpdateUsersEntity(User $user)
    {
        $this->container->get('fos_user.user_manager')->updateUser($user, false);
    }
}