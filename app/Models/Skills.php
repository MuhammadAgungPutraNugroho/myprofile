<?php

namespace App\Models;

class Skills
{
    private static $datas = [
        [
        'title' => 'My Skills',
        'deskripsi' => 'I have some skills to support my performance.'
        ],
    ];

    private static $programming = [
        [
        'gambar' => 'html.png',
        'nama' => 'HTML',
        'level' => 'Expert'
        ],
        [
        'gambar' => 'css.png',
        'nama' => 'CSS',
        'level' => 'Expert'
        ],
        [
        'gambar' => 'php.png',
        'nama' => 'PHP',
        'level' => 'Expert'
        ],
        [
        'gambar' => 'java.png',
        'nama' => 'Java',
        'level' => 'Intermediate'
        ],
        [
        'gambar' => 'python.png',
        'nama' => 'Python',
        'level' => 'Intermediate'
        ],
        [
        'gambar' => 'javascript.png',
        'nama' => 'Javascript',
        'level' => 'Intermediate'
        ],
    ];

    private static $framework = [
        [
        'gambar' => 'laravel.png',
        'nama' => 'Laravel'
        ],
        [
        'gambar' => 'codeigniter-icon.svg',
        'nama' => 'CodeIgniter'
        ],
        [
        'gambar' => 'bootstrap.png',
        'nama' => 'Bootstrap'
        ],
    ];

    private static $database = [
        [
        'gambar' => 'mysql.png',
        'nama' => 'MySQL'
        ],
        [
        'gambar' => 'postgres.png',
        'nama' => 'Postgre SQL'
        ],
        [
        'gambar' => 'sqlite.png',
        'nama' => 'SQLite'
        ],
    ];

    public static function title(){
        return self::$datas;
    }

    public static function programming(){
        return self::$programming;
    }

    public static function framework(){
        return self::$framework;
    }

    public static function database(){
        return self::$database;
    }
}
