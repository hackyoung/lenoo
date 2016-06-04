<?php
namespace Controller\User\Articles;

class Template extends \Controller\App
{
    public function index()
    {
        $this->render('global.user.articles.templates');
    }
}
