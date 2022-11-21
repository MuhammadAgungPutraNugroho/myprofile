<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    // private static $datas = [
    //     [
    //     'title' => 'About Me',
    //     'deskripsi' => 'This is my personal data'
    //     ],
    // ];

    // public static function title(){
    //     return self::$datas;
    // }
    // use HasFactory;
    private static $datas = [
        [
        'title' => 'About Me',
        'deskripsi' => 'This is my personal data'
        ],
    ];

    private static $databio = [
        [
        'kategori' => 'Biodata',
        'title' => 'Alamat',
        'deskripsi' => 'Perum Taman Anyelir 3 Blok K6 No.10 RT.04/011 Kec. Cilodong Kel. Kalimulya Kota Depok',
        'tahun' => ''
        ],
        [
        'kategori' => 'Education',
        'title' => 'Universitas Indraprasta',
        'deskripsi' => 'Teknik Informatika',
        'tahun' => '(2019 - Now)'
        ],
        [
        'kategori' => 'Works',
        'title' => 'Sparkish Kinosoft Technology',
        'deskripsi' => 'IT Support and Programmer',
        'tahun' => '(2018 - 2020)'
        ],
        [
        'kategori' => 'Works',
        'title' => 'KSPPS Bina Auladi Mandiri',
        'deskripsi' => 'IT Support and Programmer',
        'tahun' => '(2020 - Now)'
        ],
    ];

    public static function title(){
        return self::$datas;
    }

    public static function bios(){
        return self::$databio;
    }
}
