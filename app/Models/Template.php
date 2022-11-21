<?php

namespace App\Models;

class Template
{
    private static $datas = [
        [
        'title' => 'My Template',
        'deskripsi' => 'This Some Template.'
        ],
    ];

    private static $desain = [
        [
        'link' => 'https://desain.putraagung.tech/desain1',
        'nama' => 'Desain 1'
        ],
        [
        'link' => 'https://desain.putraagung.tech/desain2',
        'nama' => 'Desain 2'
        ],
        [
        'link' => 'https://desain.putraagung.tech/desain3',
        'nama' => 'Desain 3'
        ],
        [
        'link' => 'https://desain.putraagung.tech/desain4',
        'nama' => 'Desain 4'
        ],
        [
        'link' => 'https://desain.putraagung.tech/desain5',
        'nama' => 'Desain 5'
        ],
        [
        'link' => 'https://desain.putraagung.tech/desain6',
        'nama' => 'Desain 6'
        ],
        [
        'link' => 'https://desain.putraagung.tech/desain7',
        'nama' => 'Desain 7'
        ],
        [
        'link' => 'https://desain.putraagung.tech/desain8',
        'nama' => 'Desain 8'
        ],
        [
        'link' => 'https://desain.putraagung.tech/desain9',
        'nama' => 'Desain 9'
        ],
        [
        'link' => 'https://desain.putraagung.tech/desain10',
        'nama' => 'Desain 10'
        ],
        [
        'link' => 'https://desain.putraagung.tech/desain11',
        'nama' => 'Desain 11'
        ]
    ];

    private static $desainpanel = [
        [
        'link' => 'https://desain.putraagung.tech/desainpanel1',
        'nama' => 'Panel Desain 1'
        ],
    ];

    public static function title(){
        return self::$datas;
    }

    public static function landingpage(){
        return self::$desain;
    }

    public static function paneladmin(){
        return self::$desainpanel;
    }
}
