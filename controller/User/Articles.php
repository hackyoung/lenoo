<?php
namespace Controller\User;

class Articles extends \Controller\App
{
    public function index()
    {
        $this->render('global.user.articles');
    }
}
