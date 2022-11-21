<?php

namespace App\Http\Controllers;

use App\Models\Works;
use App\Models\Namess;
use App\Models\Category;
use Illuminate\Http\Request;

class WorksController extends Controller
{
    public function index(){
        return view('work',[
            'datas' => Namess::all(),
            'kategori' => Category::all(),
            'title' => Works::title(),
            'works' => Works::works()
        ]);
    }
}
