<nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">
    <div class="container">
        <a class="navbar-brand fw-semibold text-primary" href="index.html">
            BlogSistem
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto gap-2">
                <li class="nav-item">
                    <x-nav-link href="/" :aktif="request()->is('/')">Home</x-nav-link>
                </li>
                <li class="nav-item">
                    <x-nav-link href="/posts" :aktif="request()->is('posts')">Blog</x-nav-link>
                </li>
                <li class="nav-item">
                    <x-nav-link href="/about" :aktif="request()->is('about')">About</x-nav-link>
                </li>
                <li class="nav-item">
                    <x-nav-link href="/contact" :aktif="request()->is('contact')">Contact</x-nav-link>
                </li>
                @if (Auth::check())
                    <div class="dropdown">
                        <img class="img-profile rounded-circle dropdown-toggle cursor-pointer" aria-expanded="false"
                            data-bs-toggle="dropdown" style="width:40px"
                            src="{{ asset('assets/img/undraw_profile.svg') }}" alt="">
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="/profile">Profile</a></li>
                            <li><a class="dropdown-item" href="/dashboard">Settings</a></li>
                            <form method="POST" action="{{ route('logout') }}">
                                <li>
                                    @csrf
                                    <button type="submit" class="dropdown-item">Log out</button>
                                </li>
                            </form>
                        </ul>
                    </div>
                @else
                    <a href="/login" class="btn btn-primary">Login</a>
                @endif
            </ul>
        </div>
    </div>
</nav>
