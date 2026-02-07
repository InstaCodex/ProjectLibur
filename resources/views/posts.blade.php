<x-layout :title="$title">
    <div class="text-center mb-5">
        <h1 class="fw-bold">{{ $h2 }}</h1>
        <div class="d-flex justify-content-center mt-4">
            <form class="d-flex w-50">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('penulis'))
                    <input type="hidden" name="penulis" value="{{ request('penulis') }}">
                @endif
                <input class="form-control me-2" type="search" placeholder="Cari artikel..." aria-label="Search" name="search" autocomplete="off" />
                <button class="btn btn-outline-primary" type="submit">
                    Search
                </button>
            </form>
        </div>
    </div>
    <div class="row g-4">
        @foreach ($posts as $post)
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm">
                    <div class="ratio ratio-16x9">
                        <img src="https://picsum.photos/600/400?random=1" class="card-img-top img-fluid"
                            alt="Pengenalan Sistem Informasi" />
                    </div>
                    <span class="badge bg-success position-absolute top-0 start-0 m-2">
                        <a href="/posts?category={{ $post->category->slug }}"
                            class="text-decoration-none text-white">{{ $post->category->name }}</a>
                    </span>

                    <div class="card-body">
                        <a href="/posts/{{ $post['slug'] }}" class="text-decoration-none text-dark">
                            <h5 class="card-title fw-semibold">
                                {{ $post['judul'] }}
                            </h5>
                        </a>
                        <p class="text-muted small mb-2">
                            <a href="/posts?penulis={{ $post->penulis->username }}" class="text-decoration-none text-dark">👤
                                <span class="fw-medium">{{ $post->penulis->name }}</span></a> •
                            <time datetime="2026-01-15">📅 15 Januari 2026</time>
                        </p>
                        <p class="card-text text-secondary">
                            {{ Str::limit($post['artikel'], 100) }}
                        </p>
                        <a href="/posts/{{ $post['slug'] }}" class="btn btn-outline-primary btn-sm">
                            Baca Selengkapnya
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
