
{{-- <body>
    <h1>edit category</h1>
    <a href="{{route('admin.category.index')}}" >back</a>
    <form action="{{route('admin.category.update')}}" method="POST"  >
        @csrf
        <input value="{{$category->id}}" type="hidden" name="id">
        <input value="{{$category->name}}" type="text" name="name">
        <button type="submit" >submit</button>
    </form>
</body> --}}


@extends('admin.layout')
@section('content')
    <div>
        <div class="container">
            <div class="my-3  d-flex justify-content-between ">
                <h3>Edit Category</h3>
               <a href="{{route('admin.category.index')}}" type="button" class="btn btn-primary">Back</a>
            </div>
            <form action="{{route('admin.category.update')}}" method="POST"  >
                @csrf
                <input value="{{$category->id}}" type="hidden" name="id">
                <div class="form-group row">
                  <label for="staticName" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input value="{{$category->name}}" type="text" name="name" class="form-control" id="staticName" placeholder="Enter Your Category Name" >
                  </div>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Confirm</button>
              </form>
        </div>
    </div>
@endsection