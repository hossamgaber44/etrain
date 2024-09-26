

    @extends('admin.layout')
    @section('content')
        <div>
            <div class="container">
                <div class="my-3  d-flex justify-content-between ">
                    <h3>Edit Course</h3>
                   <a href="{{route('admin.courses.index')}}" type="button" class="btn btn-primary">Back</a>
                </div>
                <form action="{{route('admin.courses.update')}}" method="POST" enctype="multipart/form-data"    >
                    @csrf
                    <input type="hidden" name="id" value={{$courses->id}} ><br><br>
                    <div class="form-group row">
                      <label for="staticName" class="col-sm-2 col-form-label">Name</label>
                      <div class="col-sm-10">
                        <input type="text" value={{$courses->name}} name="name" class="form-control" id="staticName" placeholder="Enter Your Trainer Name" >
                      </div>
                    </div>
                    <div class="form-group row">
                        <img height="100" src="{{asset('/image/courses').'/'.$courses->img}}" >
                    </div>
                    <div class="form-group row">
                        <label for="staticImg" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                          <input type="file" name="img" class="form-control" id="staticImg">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="small_desc" class="col-sm-2 col-form-label">small_desc</label>
                        <div class="col-sm-10">
                          <input type="text" value={{$courses->small_desc}} name="small_desc" class="form-control" id="small_desc" placeholder="Enter Your small_desc" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="price" class="col-sm-2 col-form-label">price</label>
                        <div class="col-sm-10">
                          <input type="number" value={{$courses->price}}  name="price" class="form-control" id="price" placeholder="Enter Your small_desc" >
                        </div>
                    </div>
                    <div class="d-flex form-group">
                        <label class="col-sm-2 col-form-label" for="category_id"  > Select Category</label>
                        <select name="category_id" class="form-control" id="category_id">
                            @foreach ($category as $c)
                                <option value="{{ $c->id}}" @if($courses->category_id == $c->id) selected @endif >{{ $c->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class=" d-flex form-group">
                        <label class="col-sm-2 col-form-label" for="trainer_id"> Select Trainer_id</label>
                        <select name="trainer_id"  class="form-control" id="trainer_id">
                            @foreach ($trainer as $t)
                                <option value="{{ $t->id}}" @if($courses->trainer_id == $t->id) selected @endif >{{ $t->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="d-flex form-group">
                        <label class="col-sm-2 col-form-label" for="desc">Enter Your Description</label>
                        <textarea name="desc" class="form-control" id="desc" rows="3">{{$courses->desc}}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary mb-2">Confirm</button>
                  </form>
            </div>
        </div>
    @endsection