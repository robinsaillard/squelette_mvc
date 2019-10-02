<?php

namespace App\Entity;

use Core\Entity\Entity;

class StockEntity extends Entity{

    public function getUrl(){
        return 'index.php?p=stock';
    }
}