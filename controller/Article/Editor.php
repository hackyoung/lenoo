<?php
namespace Controller\Article;

class Editor extends \Controller\App
{
    public function index()
    {
        $this->render('global.article.edit');
    }
}
