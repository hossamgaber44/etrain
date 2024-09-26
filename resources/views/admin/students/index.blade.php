

@extends('admin.layout')

@section('content')
    <div class="category">
        <div class="container">
            <div class="d-flex justify-content-between ">
                <h3>Students</h3>
                <a href="{{ route('admin.students.create') }}" type="button" class="btn btn-primary">Add New </a>
            </div>
            <div class="table_content">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Spec</th>
                            <th scope="col">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $s)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $s->name }}</td>
                                <td>{{ $s->email }}</td>
                                <td>{{ $s->spec }}</td>
                                <td>
                                    <a href="{{route('admin.students.showCourses',$s->id)}}" type="button"
                                        class="btn btn-primary m-2">Show Courses</a>
                                    <a href="{{ route('admin.students.edit', $s->id) }}" type="button"
                                        class="btn btn-info">Edit</a>
                                    <a href="{{ route('admin.students.delete', $s->id) }}" type="button"
                                        class="btn btn-danger m-2">delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
