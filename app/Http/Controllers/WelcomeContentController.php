<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\welcomeContent;

class WelcomeContentController extends Controller
{
   public function welcomeContent(){
   $welcomeposts =	welcomeContent::all();
   return view('addnewContent.welcomeContent', compact('welcomeposts'));
   }

   public function welcomepost(Request $request){
   welcomeContent::insert([
   		'title'=>$request->title,
   		'content'=>$request->content,

   ]);
   return back();
   }
}
