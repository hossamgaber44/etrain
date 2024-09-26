
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
        <div style='background: #ffffff ; color: black;' class="nav-bar">
            @include('front.include.navbar')
        </div>
        <div style="height: 76px;"></div>
        {{-- categoryBreadCrumb --}}
        @include('front.contact.contactBreadCrumb')
        {{-- map --}}
        <div style="text-align: center">
            {{-- {!! $setting->map !!} --}}
        </div>
        {{-- contact --}}
        <div class="contact">
            <div class="container">
                <div class="contact-content d-flex">
                    <form action={{ route('front.message.contact') }} method="POST">
                        @csrf
                        <textarea type="text" name="message" placeholder="enter your message..."></textarea>
                        <div class="form-inputs d-flex">
                            <input type="text" name="name" placeholder="enter your name...">
                            <input type="email" name="email" placeholder="enter your email...">
                        </div>
                        <input type="text" name="subject" placeholder="enter your subject...">
                        <button class="contact-btn"> send message </button>
                    </form>
                    <div class="mt-5 contact-info ">
                        <div class="contact-info-content d-flex">
                            <i class="fa-regular fa-clone"></i>
                            <div class="address">
                                <span class="city">{{ $setting->city }}</span>
                                <span class="address-info">{{ $setting->address }}</span>
                            </div>
                        </div>
                        <div class="contact-info-content d-flex">
                            <i class="fa-regular fa-clone"></i>
                            <span class="phone-info">{{ $setting->phone }}</span>
                        </div>
                        <div class="contact-info-content d-flex">
                            <i class="fa-regular fa-clone"></i>
                            <div class="email-info">
                                <span class="email">{{ $setting->email }}</span>
                                <span class="work_hours">{{ $setting->work_hours }}</span>
                            </div>
                        </div>

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
