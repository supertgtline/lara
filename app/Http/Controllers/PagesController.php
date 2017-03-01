<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
class PagesController extends Controller
{
    public function index(){
    	if(View::exists('pages.index')){
    		return view('pages.index',['text'=>'<b>Laravel<b/>']);
    	}
    	else return 'No view available';
    }
    public function profile(){
    	return view('pages.profile');
    }
    public function settings(){
    	return view('pages.settings');
    }
    public function blade(){
        $gender = 'ma333le';
        $text = 'Hello There';
        $age = 10;
        return view('blade.bladetest',compact('gender','text'));
        
    }
}
