<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class PostTable extends Table
{
    public function initialize(array $config)
    {
        $this->addbehavior('Timestamp');
    }
}
