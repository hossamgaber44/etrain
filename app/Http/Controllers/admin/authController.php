<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class authController extends Controller
{
    public function login(){
        return view('admin.auth.login');
    }

    public function dologin(Request $r){
        $data =$r->validate([
            'email'=>'required|email|max:190',
            'password' => 'required|string'
        ]);

      if(auth()->guard('admin')->attempt(['email'=>$data['email'],'password' =>$data['password']]))
      {
        return redirect(route('admin.category.index'));
      }
      else
      {
        return back()->with($data);
      }
    }

}

