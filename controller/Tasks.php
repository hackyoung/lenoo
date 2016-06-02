<?php
namespace Controller;

class Tasks extends \Controller\App
{
    public function index()
    {
        $this->render('global.tasks');
    }
}
