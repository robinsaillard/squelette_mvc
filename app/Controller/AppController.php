<?php
namespace App\Controller; 

use Core\Controller\Controller;

class AppController extends Controller{
    
    protected $template = 'default';

    public function __contruct(){
        $this->viewPath = ROOT . '/app/Views/home/';
    }
}