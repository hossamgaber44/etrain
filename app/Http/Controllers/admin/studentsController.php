<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class studentsController extends Controller
{
    public function index()
    {
        $data['students'] = Student::select('id', 'name', 'email', 'spec')->orderBy('id','desc')->get();
        return view('admin.students.index')->with($data);
    }

    public function create()
    {
        return view('admin.students.create');
    }

    public function store(Request $r)
    {

        $data = $r->validate([
            'name' => 'required|string|max:40',
            'email' => 'required|email|max:100|unique:students',
            'spec' => 'required|string|max:50',
        ]);

        Student::create($data);

        return redirect(route('admin.students.index'));
    }

    public function edit($id)
    {
        $data['students'] = Student::findOrFail($id);
        return view('admin.students.edit')->with($data);
    }

    public function update(Request $r)
    {

        $data = $r->validate([
            'name' => 'required|string|max:40',
            'email' => 'required|email|max:100',//|unique:students
            'spec' => 'required|string|max:50',
        ]);
        
        Student::findOrFail($r->id)->update($data);

        return redirect(route('admin.students.index'));
    }

    public function delete($id)
    {

        Student::findOrFail($id)->delete();

        return back();
    }

    public function showCourses($id)
    {
        $data['courses'] = Student::findOrFail($id)->courses;
        $data['student_id'] = $id;
        return view('admin.students.showCourses')->with($data);
    }


    public function approveCourses($student_id, $course_id)
    {
        DB::table('course_student')->where('student_id', $student_id)->where('course_id', $course_id)->update([
            'status' => 'approve',
        ]);
        return back();
    }

    public function rejectCourses($student_id, $course_id)
    {
        DB::table('course_student')->where('student_id', $student_id)->where('course_id', $course_id)->update([
            'status' => 'reject',
        ]);
        return back();
    }

}
