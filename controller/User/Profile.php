<?php
namespace Controller\User;

class Profile extends \Controller\App
{
    public function index()
    {
        $this->render('global.user.profile');
    }
}
