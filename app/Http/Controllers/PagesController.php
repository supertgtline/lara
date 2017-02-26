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
}
