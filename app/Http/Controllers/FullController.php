<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class FullController extends Controller
{
    public function home(){
        return \view('mainhome');
    }
    public function aboutMe(){
        return \view('aboutMe');
    }
    public function resume(){
        return \view('resume');
    }
    public function otherHome(){
        return \view('home');
    }

    public function project(){
        return \view('projects');
    }

}
