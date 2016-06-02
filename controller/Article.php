<?php
namespace Controller;

class Article extends Controller\App
{
    public function index()
    {
        $this->render('global.article');
    }
}
