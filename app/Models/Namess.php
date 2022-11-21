<?php

namespace App\Models;

class Namess 
{
    private static $datas = [
        [
        'names' => 'Muhammad Agung Putra Nugroho',
        'work' => 'Programmer'
        ],
    ];

    public static function all(){
        return self::$datas;
    }
}
