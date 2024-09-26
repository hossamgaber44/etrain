{{-- 
    <h1>create category</h1>
    <a href="{{route('admin.category.index')}}" >back</a>
    <form action="{{route('admin.category.store')}}" method="POST"  >
        @csrf
        <input type="text" name="name">
        <button type="submit" >submit</button>
    </form> --}}

@extends('admin.layout')
@section('content')
    <div>
        <div class="container">
            <div class="my-3  d-flex justify-content-between ">
                <h3>Create Category</h3>
                <a href="{{ route('admin.category.index') }}" type="button" class="btn btn-primary">Back</a>
            </div>
            <form action="{{ route('admin.category.store') }}" method="POST">
                @csrf
                <div class="form-group row">
                    <label for="staticName" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="staticName"
                            placeholder="Enter Your Category Name">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Confirm</button>
            </form>
        </div>
    </div>
@endsection
