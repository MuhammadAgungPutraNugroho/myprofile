<?php

namespace App\Http\Controllers;

use App\Models\Namess;
use App\Models\Skills;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index(){
        return view('template',[
            'datas' => Namess::all(),
            'title' => Skills::title(),
            'programming' => Skills::programming(),
            'framework' => Skills::framework(),
            'database' => Skills::database(),
        ]);
    }
}
