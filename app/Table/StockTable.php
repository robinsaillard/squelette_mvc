<?php

namespace App\Table;

use Core\Table\Table;

class StockTable extends Table{
    protected $table;

    public function getUrl()
    {
        return "index.php?p=stock";
    }


}