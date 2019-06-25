<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\newContent;
use App\welcomeContent;
use App\Category;

class frontendController extends Controller
{
    public function welcome(){
        $introductoryposts = welcomeContent::all();
        $categories = Category::all();
        $contents = newContent::all();
    	return view('welcome', compact('introductoryposts', 'categories', 'contents'));
    }
    public function blog(){
    	return view('blog');
    }
    public function bookSearch(){
        $contents = newContent::paginate(20);
    	return view('books_media', compact('contents'));
    }
    
   public function userSignin(){
    	return view('user_login.login');
    }
}
