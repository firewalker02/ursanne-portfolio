<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FullController;
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

Route::get('/', [FullController::class,'home' ])->name('homeport');
Route::get('/about-me', [FullController::class,'aboutMe' ])->name('aboutMe');
Route::get('/resume',[FullController::class, 'resume'])->name('resume');
Route::get('/contact',[FullController::class, 'contact'])->name('contact');
Route::get('/projects',[FullController::class, 'project'])->name('project');
Route::get('/hireMe',[FullController::class, 'hire'])->name('hire');
Route::get('/education',[FullController::class, 'education'])->name('education');
Route::get('/experience',[FullController::class, 'experience'])->name('experience');
Route::post('/send',[FullController::class, 'send'])->name('send');
Route::get('/otherhome',[FullController::class, 'otherHome'])->name('otherHome');