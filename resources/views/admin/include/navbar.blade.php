<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <div class="container-fluid p-0">
            <div style="flex-basis: 30%">
                <img src="{{ asset('image/home_img/logo.png') }}">
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars Menu-hamburger"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item active">
                        <a style="color: #858585;" class="nav-link"
                            href={{ route('admin.category.index') }}>Category</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #858585;" class="nav-link"
                            href={{ route('admin.trainers.index') }}>Trainers</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #858585;" class="nav-link" href={{ route('admin.courses.index') }}>Courses</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #858585;" class="nav-link"
                            href={{ route('admin.students.index') }}>Students</a>
                    </li>

                    <div class="nav-item dropdown">
                        <a style="border: none ; outline:none;" class="nav-link dropdown-toggle" data-toggle="dropdown"
                            href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" v-pre>
                            {{ Auth::user()->email }} <i class="fa fa-angle-down mt-1"></i>
                        </a>
                        <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</nav>
