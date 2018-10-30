<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Course;

class PagesController extends Controller
{
   


   public function list(){


     $carray = Course:: all();
   
  

return view('course',compact('carray'));
   	
   	

   }


   public function add(Request $request){

   

   $course = new Course;
   $course->course_id =$request->input('id');
   $course->course_name =$request->input('name');
   $course->course_type =$request->input('type');
   $course->save();
   return redirect('/')->with('info','Successfully Saved');
   	

   }

   public function display(){

   	$url="https://api.coursera.org/api/courses.v1";

   	$ch=curl_init();
   	curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
   	curl_setopt($ch,CURLOPT_URL,$url);
   	$result=curl_exec($ch);
   	curl_close($ch);
    $refine_array=json_decode($result,true);
   

   	return view('home',compact('refine_array'));
   	

   }
}
