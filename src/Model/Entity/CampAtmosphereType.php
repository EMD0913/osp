<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class CampAtmosphereType extends Entity
{
    protected $_accessible = [
        // # 任意の項目にアクセス可能
        '*' => true,
        // # ただし、idはアクセス不可
        'id' => false,
    ];
}

// 全てのレコードにアクセスするにあたり、上記の指示をしている