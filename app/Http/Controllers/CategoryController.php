<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
  public function category(){
  	$categories = Category::all();
  	return view('addnewContent.category', compact('categories'));
  }
  public function addCategory(Request $request){
  	$request->validate([
        'content_category' => 'required|unique:categories,category'
        ]);
  		Category::insert([
  			'category' => $request->content_category
  		]);
  	return back();
  }

}
