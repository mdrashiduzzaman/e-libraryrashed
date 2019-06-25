<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
	public function blogPost(){
		return view('addnewContent.blogPost');
	}
}
