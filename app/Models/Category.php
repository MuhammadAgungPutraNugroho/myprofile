<?php

namespace App\Models;

class Category
{
    private static $datas = [
        [
        'title' => 'All',
        'kategori' => '*'
        ],
        [
        'title' => 'Company Profile',
        'kategori' => 'company profile'
        ],
    ];

    public static function all(){
        return self::$datas;
    }
}
