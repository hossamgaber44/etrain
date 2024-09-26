<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Trainer;
use Illuminate\Http\Request;

class trainersController extends Controller
{
    public function index()
    {
        $data['trainers'] = Trainer::select('id', 'name', 'phone', 'spec', 'img')->orderBy('id','desc')->get();
        return view('admin.trainers.index')->with($data);
    }

    public function create()
    {
        return view('admin.trainers.create');
    }

    public function store(Request $r)
    {

        $data = $r->validate([
            'name' => 'required|string|max:50',
            'phone' => 'required|string|max:20',
            'spec' => 'required|string|max:40',
            'img' => 'required|image|mimes:jpg,jpeg,png',
        ]);

        $file_extension = $r->img->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $path = 'image/trainers';
        $r->img->move($path, $file_name);

        $data['img'] = $file_name;
        Trainer::create($data);

        return redirect(route('admin.trainers.index'));
    }

    public function edit($id)
    {
        $data['trainers'] = Trainer::findOrFail($id);
        return view('admin.trainers.edit')->with($data);
    }

    public function update(Request $r)
    {

        $data = $r->validate([
            'name' => 'required|string|max:50',
            'phone' => 'required|string|max:20',
            'spec' => 'required|string|max:40',
            'img' => ' nullable|image|mimes:jpg,jpeg,png',
        ]);

        $old_name = Trainer::findOrFail($r->id)->img;

        if ($r->hasFile('img')) {

            $image_path = public_path('image/trainers/' . $old_name);
            if (file_exists($image_path)) {
                unlink($image_path);
            }

            $file_extension = $r->img->getClientOriginalExtension();
            $file_name = time() . '.' . $file_extension;
            $path = 'image/trainers';
            $r->img->move($path, $file_name);
            $data['img'] = $file_name;
        } else {
            $data['img'] = $old_name;
        };

        Trainer::findOrFail($r->id)->update($data);

        return redirect(route('admin.trainers.index'));
    }

    public function delete($id)
    {
        $old_name = Trainer::findOrFail($id)->img;
        $image_path = public_path('image/trainers/' . $old_name);
        if (file_exists($image_path)) {
            unlink($image_path);
        }

        Trainer::findOrFail($id)->delete();

        return back();
    }
}
