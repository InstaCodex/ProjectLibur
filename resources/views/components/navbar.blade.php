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
            </ul>
        </div>
    </div>
</nav>
