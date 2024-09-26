<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erain</title>
    <link rel="icon" href="{{ asset('image/home_img/favicon.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    @yield('style')
    <link rel="stylesheet" href="{{ asset('style/css') }}/main.css">
    <link rel="stylesheet" href="{{ asset('style/css') }}/frontBage.css">
</head>

<body>
    <main>
        <div style=" background: #ffffff ; color: #000000" class="nav-bar">
            @include('front.include.navbar')
        </div>
        <div style="height: 76px;"></div>
        @yield('content')
        @include('front.include.footer')
    </main>
    <script>
        const navLink = document.querySelector(".all-links");

        function toggleNavbar() {
            navLink.classList.toggle('mobile-menu');
        };
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
