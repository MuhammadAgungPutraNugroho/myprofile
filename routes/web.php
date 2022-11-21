<?php

use App\Models\About;
use App\Models\Works;
use App\Models\Namess;
use App\Models\Skills;
use App\Models\Category;
use App\Models\Contacts;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\WorksController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TemplateController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [AboutController::class,'index']);

Route::get('/skills', [SkillsController::class,'index']);

Route::get('/experience', [WorksController::class,'index']);

Route::get('/template', [TemplateController::class,'index']);

Route::get('/contact', [ContactController::class, 'index']);
