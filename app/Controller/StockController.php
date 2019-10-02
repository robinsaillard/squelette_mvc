<?php

namespace App\Controller; 

use App;
use App\Controller\AppController;

class StockController extends AppController{
    

    public function index(){
        $stock = App::getInstance()->getTable('stock')->all();
        $this->render('index',compact('stock'));
    }
}