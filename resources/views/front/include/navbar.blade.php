<div class="container">
    <div class="navbar p-0">
        <div class="logo">
            <a href="{{ route('front.homePage') }}">
                <img src="{{ asset('image/home_img') . '/' . $setting->logo }}" />
            </a>
        </div>
        <div class="all-links flex">
            <div class="close-navbar">
                <i onclick="toggleNavbar()" class="fa-solid fa-xmark close-nav-icon"></i>
            </div>
            <ul class="navbar-link">
                <li><a onclick="toggleNavbar()" href="{{ route('front.homePage') }}">Home</a></li>
                <div class="btn-group">
                    <button style="font-size: 18px" class="btn  btn-sm dropdown-toggle" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Courses
                    </button>
                    <ul class="dropdown-menu">
                        @foreach ($category as $c)
                            <li style="font-size: 16px">
                                <a href="{{ route('front.showCategory', $c->id) }}">{{ $c->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <li><a onclick="toggleNavbar()" href="{{ route('front.contact') }}">Contact</a></li>
                <li>
                    <div class="nav-item dropdown">
                        <a style="border: none ; outline:none;" class="nav-link dropdown-toggle" data-toggle="dropdown"
                            href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <i class="fa fa-angle-down mt-1"></i>
                        </a>
                        <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                            <a style="color:#000000" class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <i onclick="toggleNavbar()" class="fa fa-bars Menu-hamburger"></i>
    </div>
</div>
