<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\newContent;
use Image;
use App\Category;

class NewContentController extends Controller
{
  public function addContent(){
  	$contents = newContent::all();
    $categories = Category::all();
  	return view('addnewContent.addContent', compact('contents', 'categories'));
  }
 public function newContentInsert(Request $request){

  $last_inserted_id = newContent::insertGetId([
  	'category_id'=>$request->category_id,
    'title'=>$request->title,
  	'author'=>$request->author,
  	'subject'=>$request->subject,
  	'callno'=>$request->callno,
  	'class_no'=>$request->class_no,
  	'accession'=>$request->accession,
  	'publisher'=>$request->publisher,
  	'publish_date'=>$request->publish_date,
  	'edition'=>$request->edition,
  	'isbn'=>$request->isbn,
  	'status'=>$request->status,
    'description'=>$request->description,


  ]);
   
        if($request->hasFile('content_image')){
            //echo $last_inserted_id;
            $photo_to_uploaded = $request->content_image;
            $filename = $last_inserted_id. '.' .$photo_to_uploaded->getClientOriginalExtension();

           Image::make($photo_to_uploaded)->resize(400,450)->save(base_path('public/uploads/content_photo/' . $filename));
           newContent::find($last_inserted_id)->update([
               'content_image' => $filename
           ]);
        
        }
        return back();

      }
}