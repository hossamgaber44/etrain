
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
        @include('front.courses.courseDetailsBreadCrumb')
        {{-- special-courses --}}
        <div class="course-details">
            <div class="container">
                <div class="course-details-content d-flex">
                    <div class="course-details-info">
                        <div class="course-details-image">
                            <img src="{{ asset('image/courses') . '/' . $course->img }} ">
                        </div>
                        <p class="course-details-description">{{ $course->desc }}</p>
                    </div>
                    <div class="trainer-course">
                        <div class=" trainer-course-details">
                            <div class="trainer-name d-flex">
                                <span>Trainer's Name : </span>
                                <span>{{ $course->Trainer->name }}</span>
                            </div>
                            <span class="trainer-course-details-line"></span>
                            <div class="course-price  d-flex">
                                <span>Course Free : </span>
                                <span>${{ $course->price }}</span>
                            </div>
                        </div>
                        <form action="{{ route('front.message.enroll') }}" method="post">
                            @csrf
                            <input type="hidden" name="course_id" value={{ $course->id }}>
                            <input type="text" name="name" placeholder="enter your name"><br>
                            <input type="email" name="email" placeholder="enter your email"><br>
                            <input type="text" name="spec" placeholder="enter your speciality"><br>
                            <button type="submit">send message</button>
                        </form>
                    </div>
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
