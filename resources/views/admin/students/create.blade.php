
@extends('admin.layout')
@section('content')
    <div>
        <div class="container">
            <div class="my-3  d-flex justify-content-between ">
                <h3>Add Student</h3>
                <a href="{{ route('admin.students.index') }}" type="button" class="btn btn-primary">Back</a>
            </div>
            <form action="{{ route('admin.students.store') }}" method="POST">
                @csrf
                <div class="form-group row">
                    <label for="staticName" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="staticName"
                            placeholder="Enter Your Student Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" name="email" class="form-control" id="staticEmail"
                            placeholder="Enter Your Student Email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticSpec" class="col-sm-2 col-form-label">Spec</label>
                    <div class="col-sm-10">
                        <input type="text" name="spec" class="form-control" id="staticSpec"
                            placeholder="Enter Your Student Spec">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Confirm</button>
            </form>
        </div>
    </div>
@endsection
