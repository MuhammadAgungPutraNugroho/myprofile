<?php

namespace App\Models;

class Works 
{
    private static $datas = [
        [
        'title' => 'My Work',
        'deskripsi' => 'I have some experience.'
        ],
    ];

    private static $works = [
        [
        'kategori' => 'company profile',
        'logo' => 'acm.png',
        'nama' => 'ACM Indonesia',
        'link' => 'http://acm-indonesia.com',
        'deskripsi' => 'Website ini dibuat menggunakan PHP dan MySQL'
        ],
        [
        'kategori' => 'company profile',
        'logo' => 'vrc.png',
        'nama' => 'VRC International',
        'link' => 'https://www.vrcinternational.com/',
        'deskripsi' => 'Website ini dibuat menggunakan PHP dan MySQL'
        ],
        [
        'kategori' => 'company profile',
        'logo' => 'bab.png',
        'nama' => 'British Assessment Bureau Indonesia',
        'link' => 'https://britishassessmentindonesia.com/',
        'deskripsi' => 'Website ini dibuat menggunakan PHP dan MySQL'
        ],
        [
        'kategori' => 'company profile',
        'logo' => 'acsr.png',
        'nama' => 'ACS Registrars Indonesia',
        'link' => 'https://www.acsregistrarsindonesia.com/',
        'deskripsi' => 'Website ini dibuat menggunakan PHP dan MySQL'
        ]
    ];

    public static function title(){
        return self::$datas;
    }

    public static function works(){
        return self::$works;
    }
}
