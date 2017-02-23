<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
   public function index(){
   	$users = [
		'0' => [
			'first_name'=> 'Renato',
			'last_name'=> 'Thao',
			'location'=>'Da Nang'

		],
		'1' => [
			'first_name'=> 'Jessica',
			'last_name'=> 'Lan',
			'location'=>'Da Nang'

		],

	];
	//return view('admin.users.index',compact('users'));
	return $users;

   }
   public function create(){
   	return view('admin.users.create');
   }
   public function store(Request $request){
   	User::create($request->all());
   	return 'success';
   }
}
