<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function index(){
        $data['category']=Category::select('id','name')->orderBy('id','desc')->get();
        return view('admin.category.index')->with($data);
    }

    public function create(){
        return view('admin.category.create');
    }

    public function store(Request $r){

        $data=$r->validate([
            'name'=> 'required|string|max:24'
        ]);

        Category::create($data);

        return redirect(route('admin.category.index'));
    }

    public function edit($id){
        $data['category']=Category::findOrFail($id);
        return view('admin.category.edit')->with($data);
    }

    public function update(Request $r){

        $data=$r->validate([
            'name'=> 'required|string|max:24'
        ]);

        Category::findOrFail($r->id)->update($data);

        return redirect(route('admin.category.index'));
    }

    public function delete($id){

        Category::findOrFail($id)->delete();

        return back();
    }

}
