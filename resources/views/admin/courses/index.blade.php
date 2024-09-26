{{--
    <h4>courses</h4>
    <a href="{{route('admin.courses.create')}}" >add</a>
    <br><br>
    <span>#</span><span>name</span><span>action</span>
    <br>
    @foreach ($courses as $c)
    <span>{{$loop->iteration}}</span>


    <span>{{$c->name}}</span>
    <span>
      <img height="40px" src="{{asset('image/courses/').'/'.$c->img}}">
    </span>
    <span>{{$c->price}}</span>
    {{-- <span>{{$c->desc}}</span> --}}

{{--
    <a href="{{route('admin.courses.edit',$c->id)}}" >edit</a>
    <a href="{{route('admin.courses.delete',$c->id)}}" >delet</a>
  <br>
    @endforeach --}}


@extends('admin.layout')

@section('content')
<div class="category">
<div class="container">
<div class="d-flex justify-content-between ">
    <h3>Courses</h3>
   <a href="{{route('admin.courses.create')}}" type="button" class="btn btn-primary">add</a>
</div>
<div class="table_content">
    <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">image</th>
        <th scope="col">name</th>
        <th scope="col">price</th>
        <th scope="col">action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($courses as $c)
          <tr>
              <th scope="row">{{$loop->iteration}}</th>
              <td><img height="40px" src="{{asset('image/courses/').'/'.$c->img}}"></td>
              <td>{{$c->name}}</td>
              <td>{{$c->price}}</td>
              <td>
                <a  href="{{route('admin.courses.edit',$c->id)}}"   type="button" class="btn btn-info m-2">Edit</a>
                <a  href="{{route('admin.courses.delete',$c->id)}}"  type="button" class="btn btn-danger">delete</a>
              </td>
           </tr>
      @endforeach
    </tbody>
  </table>
</div>
</div>
</div>
  @endsection
