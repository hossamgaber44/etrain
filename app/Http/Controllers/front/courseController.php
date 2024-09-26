<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class courseController extends Controller
{
    public function showCategory($id){
        $data['category']=Category::findOrFail($id);
        $data['courses']=Course::where('category_id', $id)->paginate(3);
        return view('front.courses.CategoryCourses')->with($data);
    }

    public function courseDetails($id){
        $data['course']=Course::findOrFail($id);
        return view('front.courses.courseDetails')->with($data);
    }

    public function courses(){
        $data['courses']=Course::paginate(6);
        return view('front.courses.CategoryCourses')->with($data);
    }

}
