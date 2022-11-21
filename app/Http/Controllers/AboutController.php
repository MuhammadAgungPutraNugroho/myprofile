<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Namess;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        return view('home', [
            'datas' => Namess::all(),
            'title' => About::title(),
            'bio' => About::bios()
        ]);
    }
}
