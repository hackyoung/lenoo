<?php
namespace Controller;

class Articles extends \Controller\App
{
    public function index()
    {
        $this->render('global.articles');
    }
}
