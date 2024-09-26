<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Etrain</title>
    <link rel="icon" href="{{ asset('image/home_img/favicon.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('style/css') }}/main.css">
    <link rel="stylesheet" href="{{ asset('style/css') }}/frontBage.css">
</head>

<body>
    <main>
        {{-- navbar --}}
        <div style='background: #ffffff ; color: black' class="nav-bar">
            @include('front.include.navbar')
        </div>
        <div style="height: 76px;"></div>
        {{-- categoryBreadCrumb --}}
        @include('front.courses.categoryBreadCrumb')
        {{-- special-courses --}}
        <div class="special-courses">
            <div class="container">
                <h3 class="special-courses-subtitle">popular courses</h3>
                <h1 class="special-courses-title"> special courses</h1>
                <span class="special-courses-line"></span>
                <div class="special-courses-content d-flex ">
                    @foreach ($courses as $item)
                        <div class="course-details">
                            <div class="special-courses-image">
                                <img src="{{ asset('image/courses') }}/{{ $item->img }}">
                            </div>
                            <div class="special-courses-text">
                                <div class="category d-flex ">
                                    <a href="{{ route('front.showCategory', $item->Category->id) }}"
                                        class="category-name">{{ $item->Category->name }}</a>
                                    <h3 class="price"> ${{ $item->price }}</h3>
                                </div>
                                <div class="special-courses-information">
                                    <a href="{{ route('front.courseDetails', $item->id) }}"
                                        class="special-courses-header">{{ $item->name }}</a>
                                    <p class="special-courses-discreption">{{ $item->small_desc }}</p>
                                </div>
                                <div class="instructors d-flex">
                                    <div class="instructors-image">
                                        <img src="{{ asset('image/trainers') }}/{{ $item->Trainer->img }}">
                                    </div>
                                    <div class="instructors-name">
                                        <span>conduct by:</span>
                                        <h2>{{ $item->Trainer->name }}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div>
                    {!! $courses->render() !!}
                </div>
            </div>
        </div>
        {{-- footer --}}
        @include('front.include.footer')
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const navLink = document.querySelector(".all-links");

        function toggleNavbar() {
            navLink.classList.toggle('mobile-menu');
        };
    </script>
</body>

</html>
