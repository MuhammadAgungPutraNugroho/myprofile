<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use App\Models\Namess;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('contact',[
            'datas' => Namess::all(),
            'title' => Contacts::title(),
            'contact' => Contacts::all()
        ]);
    }
}
