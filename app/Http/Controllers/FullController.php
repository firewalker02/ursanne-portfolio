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
        return \view('home');
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

    public function contact(){
        return \view('contact');
    } 
    public function education(){
        return \view('education');
    }
    public function hire(){
        return \view('contact');
    }

    public function send(Request $request){
        
        return \redirect('/otherhome')->with('flashMessage',"Your message has been successfully transmitted to Ursanne.");
    }
}
