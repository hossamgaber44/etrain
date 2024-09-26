@extends('admin.layout')

@section('content')
    <div class="category">
        <div class="container">
            <div class="d-flex justify-content-between ">
                <h3>Category</h3>
                <a href="{{ route('admin.category.create') }}" type="button" class="btn btn-primary">add</a>
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
                        @foreach ($category as $c)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $c->name }}</td>
                                <td>
                                    <a href="{{ route('admin.category.edit', $c->id) }}" type="button"
                                        class="btn btn-info m-2">edit</a>
                                    <a href="{{ route('admin.category.delete', $c->id) }}" type="button"
                                        class="btn btn-danger">delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection











{{-- @section('content')
<h4>category</h4>
<a href="{{route('admin.category.create')}}" >add</a>
<br><br>
<span>#</span><span>name</span><span>action</span>
<br>
@foreach ($category as $c)
<span>{{$loop->iteration}}</span>
<span>{{$c->name}}</span>
<a href="{{route('admin.category.edit',$c->id)}}" >edit</a>
<a href="{{route('admin.category.delete',$c->id)}}" >delet</a>
<br>
@endforeach
@endsection --}}
