<?php
namespace Controller\User\Articles;

class Drafts extends \Controller\App
{
    public function index()
    {
        $this->render('global.user.articles.drafts');
    }
}
