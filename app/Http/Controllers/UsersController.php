<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Validator;
use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller {
	function getUser() {
		return view('users.create');
	}
	
	function postUser(Request $request) {
		$validator = Validator::make($request->all(),[
			'firstname' => 'required|alpha|max:255',
			'lastname' => 'required|alpha|max:255',
			'company' => 'required|alpha|max:255',
			'address' => 'max:512',
			'mail' => 'required|email|max:255',
			'phone' => 'numeric'
		]);
		
		if ($validator->fails()) {
			return $validator->errors();
		} else {
			User::create($request->all());
			redirect()->route('thanks');
		}
	}
	
	function getThanks() {
		return view('thanks');
	}
}