<?php

namespace App\Http\Controllers\front;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class contactController extends Controller
{
    public function index(){
        $data['setting']=Setting::first(); 
        return view('front.contact.index')->with($data);
    }

}
