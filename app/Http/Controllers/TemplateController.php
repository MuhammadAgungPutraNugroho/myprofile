<?php

namespace App\Http\Controllers;

use App\Models\Namess;
use App\Models\Skills;
use App\Models\Template;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index(){
        return view('template',[
            'datas' => Namess::all(),
            'title' => Template::title(),
            'landingpage' => Template::landingpage(),
            'paneladmin' => Template::paneladmin()
        ]);
    }
}
