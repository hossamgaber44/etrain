{{-- <h3> courses<h3>
        ------------------------------------ <br>
        @foreach ($courses as $c)
            <span>{{ $c->name }}</span>
            '--'
            @if ($c->pivot->status !== 'approve')
                <a href="{{ route('admin.students.approveCourses', [$student_id, $c->id]) }}">approve</a>
            @endif
            @if ($c->pivot->status !== 'reject')
                <a href="{{ route('admin.students.rejectCourses', [$student_id, $c->id]) }}">reject</a>
            @endif
            <br>
        @endforeach --}}


@extends('admin.layout')

@section('content')
    <div class="category">
        <div class="container">
            <div class="d-flex justify-content-between ">
                <h3>Courses</h3>
                <a href="{{ route('admin.students.index') }}" type="button" class="btn btn-primary">Back</a>
            </div>
            <div class="table_content">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">name</th>
                            <th scope="col">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($courses as $c)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $c->name }}</td>
                                <td>
                                    @if ($c->pivot->status !== 'approve')
                                        <a href="{{ route('admin.students.approveCourses', [$student_id, $c->id]) }}"
                                            type="button" class="btn btn-danger">approve</a>
                                    @endif
                                    @if ($c->pivot->status !== 'reject')
                                        <a type="button" class="btn btn-info"
                                            href="{{ route('admin.students.rejectCourses', [$student_id, $c->id]) }}">reject</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
