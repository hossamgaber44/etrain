<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\Newsletters;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    public function newsletter(Request $r)
    {
        $data = $r->validate([
            'email' => 'required|email'
        ]);
        Newsletters::create($data);
        return back();
    }

    public function contact(Request $r)
    {
        $data = $r->validate([
            'email' => 'required|email|max:190',
            'name' => 'required|string|max:190',
            'subject' => 'nullable|string|max:190',
            'message' => 'required|string',
        ]);
        Message::create($data);
        return back();
    }

    public function enroll(Request $r)
    {
        $data = $r->validate([
            'email' => 'required|email|max:190',
            'name' => 'required|string|max:190',
            'spec' => 'nullable|string|max:190',
            'course_id' => 'required|exists:courses,id',
        ]);
        $old_student=Student::select('id')->where('email',$data['email'])->first();

        if( $old_student == null){
            $student = Student::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'spec' => $data['spec']
            ]);
        $student_id = $student->id;
        }
        else
        {
            $student_id = $old_student->id;
            if($data['name'] !== null){
                $old_student->update(['name'=>$data['name']]);
            }
            if($data['spec'] !== null){
                $old_student->update(['spec'=>$data['spec']]);
            }
        }
       

        DB::table('course_student')->insert([
            'course_id' => $data['course_id'],
            'student_id' =>  $student_id
        ]);

        return back();
    }
}
