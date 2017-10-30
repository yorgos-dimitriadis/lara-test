<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    
	public function index() {

		DB::table('posts')->insert(
			['title' => 'Title 1', 'desc' => "Description"]
		);

	}
}
