<?php

namespace App\Models;

class Contacts
{
    private static $datas = [
        [
            'title' => 'Contact Me',
            'deskripsi' => 'You can contact me'
        ],
    ];

    private static $contact = [
        [
        'gambar' => 'mail.png',
        'link' => 'mailto:muhammadagung0708@gmail.com'
        ],
        [
        'gambar' => 'linked.png',
        'link' => 'https://www.linkedin.com/in/muhammad-putra-a6393813a/'
        ],
        [
        'gambar' => 'git.png',
        'link' => 'https://github.com/ZUDQQQ'
        ],
    ];

    public static function all(){
        return self::$contact;
    }

    public static function title(){
        return self::$datas;
    }
}
