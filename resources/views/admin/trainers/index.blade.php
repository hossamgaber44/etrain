
    {{-- <h4>trainers</h4>
    <a href="{{route('admin.trainers.create')}}" >add</a>
    <br><br>
    <span>#</span><span>name</span><span>action</span>
    <br>
    @foreach ($trainers as $t)
    <span>{{$loop->iteration}}</span>
    <span>{{$t->name}}</span>
    <span>
      <img height="40px" src="{{asset('image/trainers/').'/'.$t->img}}">
    </span>
    <span>{{$t->phone}}</span>
    <span>{{$t->spec}}</span>
    <a href="{{route('admin.trainers.edit',$t->id)}}" >edit</a>
    <a href="{{route('admin.trainers.delete',$t->id)}}" >delet</a>
  <br> 
    @endforeach --}}


    @extends('admin.layout')

@section('content')
<div class="category">
<div class="container">
<div class="d-flex justify-content-between ">
    <h3>Trainers</h3>
   <a href="{{route('admin.trainers.create')}}" type="button" class="btn btn-primary">add</a>
</div>
<div class="table_content">
    <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">image</th>
        <th scope="col">name</th>
        <th scope="col">phone</th>
        <th scope="col">spec</th>
        <th scope="col">action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($trainers as $t)
          <tr>
              <th scope="row">{{$loop->iteration}}</th>
              <td><img height="40px" src="{{asset('image/trainers/').'/'.$t->img}}"></td>
              <td>{{$t->name}}</td>
              <td>{{$t->phone}}</td>
              <td>{{$t->spec}}</td>

              <td>
                <a  href="{{route('admin.trainers.edit',$t->id)}}"  type="button" class="btn btn-info">edit</a>
                <a  href="{{route('admin.trainers.delete',$t->id)}}"  type="button" class="btn btn-danger">delete</a>
              </td>
           </tr>
      @endforeach
    </tbody>
  </table>
</div>
</div>
</div>
  @endsection

