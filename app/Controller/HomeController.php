<?php
namespace App\Controller;
use Core\Controller\Controller;

class HomeController extends AppController{

        public function index(){
        $title = "Accueil";
        $this->render('index',compact('title'));
    }
}