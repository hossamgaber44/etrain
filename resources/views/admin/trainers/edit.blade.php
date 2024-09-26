


    @extends('admin.layout')
    @section('content')
        <div>
            <div class="container">
                <div class="my-3  d-flex justify-content-between ">
                    <h3>Edit Trainers</h3>
                   <a href="{{route('admin.trainers.index')}}" type="button" class="btn btn-primary">Back</a>
                </div>
                <form action="{{route('admin.trainers.update')}}" method="POST" enctype="multipart/form-data"  >
                    @csrf
                    <input type="hidden" name="id" value="{{$trainers->id}}" >
                    <div class="form-group row">
                      <label for="staticName" class="col-sm-2 col-form-label">Name</label>
                      <div class="col-sm-10">
                        <input type="text" name="name" value="{{$trainers->name}}" class="form-control" id="staticName" placeholder="Enter Your Trainer Name" >
                      </div>
                    </div>
                    <div class="form-group row">
                        <label for="Trainers" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                          <input type="text" name="phone" value="{{$trainers->phone}}" class="form-control" id="staticPhone" placeholder="Enter Your Trainer Phone" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticSpec" class="col-sm-2 col-form-label">Spec</label>
                        <div class="col-sm-10">
                          <input type="text" name="spec" value="{{$trainers->spec}}" class="form-control" id="staticSpec" placeholder="Enter Your Trainer Spec" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <img height="100" src="{{asset('/image/trainers').'/'.$trainers->img}}" >
                    </div>
                    <div class="form-group row">
                        <label for="staticImg" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="file" name="img" class="form-control" id="staticImg">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Confirm</button>
                  </form>
            </div>
        </div>
    @endsection

