<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    private static $datas = [
        [
        'title' => 'About Me',
        'deskripsi' => 'This is my personal data'
        ],
    ];

    public static function title(){
        return self::$datas;
    }
    use HasFactory;
}
