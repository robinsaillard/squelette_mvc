<?php

use App\Controller\HomeController;





define('ROOT',dirname(__DIR__));

require ROOT . '/app/App.php';

App::load();


if(isset($_GET['p'])){
    $page = $_GET['p'];
}else{
    $page = 'home';
    $title = 'Accueil';
}

if($page === 'home'){
    $controller = new HomeController();
    $controller->index();
}
?>
