<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    //list
    public function index()
    {
    	$users = User::all()->toArray();
    	return array_reverse($users);
    }

    public function add(Request $request)
    {
    	$password 	= 	Hash::make('admin1234');
    	$user 		=	new User([
				    		'name' 		=> 	$request->name,
				    		'email' 	=> 	$request->email,
				    		'password'	=>	$password
				    	]);
    	$user->save();
    	return response()->json('The user successfully added.');
    }
}
