<div class="special-courses">
    <div class="container">
        <h3 class="special-courses-subtitle">popular courses</h3>
        <h1 class="special-courses-title"> special courses</h1>
        <span class="special-courses-line"></span>
        <div class="special-courses-content d-flex ">
            @foreach ($courses as $item)
            
            <div class="course-details">
                <div class="special-courses-image">
                    <img src=" {{asset('image/courses/').'/'.$item->img}}">
                </div>
                <div class="special-courses-text">
                    <div class="category d-flex ">
                        <a href="{{ route('front.showCategory',$item->Category->id ) }}" class="category-name">{{$item->Category->name}}</a>
                        <h3 class="price"> ${{$item->price}}</h3>
                    </div>
                    <div class="special-courses-information">
                        <a href="{{route('front.courseDetails',$item->id)}}" class="special-courses-header">{{$item->name}}</a>
                        <p class="special-courses-discreption">{{$item->small_desc}}</p>
                    </div>
                    <div class="instructors d-flex">
                        <div class="instructors-image">
                            <img src="{{asset('/image/trainers'.'/'.$item->Trainer->img)}}">
                        </div>
                        <div class="instructors-name">
                            <span>conduct by</span>
                            <h2>{{$item->Trainer->name}}</h2>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</div>