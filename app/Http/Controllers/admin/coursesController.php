<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\Trainer;
use Illuminate\Http\Request;

class coursesController extends Controller
{
    public function index()
    {
        $data['courses'] = Course::select('id', 'category_id', 'trainer_id', 'small_desc', 'desc', 'name', 'price', 'img')->orderBy('id','desc')->get();
        return view('admin.courses.index')->with($data);
    }

    public function create()
    {
        $data['category'] = Category::select('id', 'name')->get();
        $data['trainer'] = Trainer::select('id', 'name')->get();
        return view('admin.courses.create')->with($data);
    }

    public function store(Request $r)
    {
        $data = $r->validate([
            'name' => 'required|string|max:50',
            'small_desc' => 'required|string|max:190',
            'desc' => 'required|string',
            'price' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
            'trainer_id' => 'required|exists:trainers,id',
            'img' => 'required|image|mimes:jpg,jpeg,png',
        ]);
        $file_extension = $r->img->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $path = 'image/courses';
        $r->img->move($path, $file_name);

        $data['img'] = $file_name;
        Course::create($data);

        return redirect(route('admin.courses.index'));
    }

    public function edit($id)
    {
        $data['category'] = Category::select('id', 'name')->get();
        $data['trainer'] = Trainer::select('id', 'name')->get();
        $data['courses'] = Course::findOrFail($id);
        return view('admin.courses.edit')->with($data);
    }

    public function update(Request $r)
    {

        $data = $r->validate([
            'name' => 'required|string|max:50',
            'small_desc' => 'required|string|max:190',
            'desc' => 'required|string',
            'price' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
            'trainer_id' => 'required|exists:trainers,id',
            'img' => 'nullable|image|mimes:jpg,jpeg,png',
        ]);

        $old_name = Course::findOrFail($r->id)->img;

        if ($r->hasFile('img')) {

            $image_path = public_path('image/courses/' . $old_name);
            if (file_exists($image_path)) {
                unlink($image_path);
            }

            $file_extension = $r->img->getClientOriginalExtension();
            $file_name = time() . '.' . $file_extension;
            $path = 'image/courses';
            $r->img->move($path, $file_name);
            $data['img'] = $file_name;
        } else {
            $data['img'] = $old_name;
        };

        Course::findOrFail($r->id)->update($data);

        return redirect(route('admin.courses.index'));
    }

    public function delete($id)
    {
        $old_name = Course::findOrFail($id)->img;
        $image_path = public_path('image/courses/' . $old_name);
        if (file_exists($image_path)) {
            unlink($image_path);
        }

        Course::findOrFail($id)->delete();

        return back();
    }
}
