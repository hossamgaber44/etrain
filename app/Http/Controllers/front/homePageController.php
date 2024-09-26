<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Student;
use App\Models\Trainer;
use Illuminate\Http\Request;

class homePageController extends Controller
{
   public function index(){
      $data['courses']=Course::select('id', 'category_id', 'trainer_id', 'small_desc', 'name', 'price', 'img')
      ->orderBy('id','desc')
      ->take(3)
      ->get();
      $data['Course_counter']=Course::count();
      $data['Trainer_counter']=Trainer::count();
      $data['Student_counter']=Student::count();
      // dd($data['courses']);
    return view('front.index')->with($data);
   }
}
