<x-layout :title="$title">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <h1 class="fw-bold mb-3">{{ $post['judul'] }}</h1>
            <p class="text-muted small mb-2">
                <a href="/posts?penulis={{ $post->penulis->username }}" class="text-decoration-none text-dark">👤 <span
                        class="fw-medium">{{ $post->penulis->name }}</span></a> •
                <time datetime="2026-01-15">📅 15 Januari 2026</time>
            </p>
            <div class="position-relative mb-4">
                <div class="ratio ratio-21x9 rounded overflow-hidden">
                    <img src="https://picsum.photos/1200/675?random=1" class="img-fluid"
                        alt="Pengenalan Sistem Informasi">
                </div>
                <a href="/posts?category={{ $post->category->slug }}">
                    <span
                        class="badge bg-{{ $post->category->warna }} px-2 py-1 fw-normal small
                             position-absolute top-0 start-0 m-2">
                        {{ $post->category->name }}
                    </span>
                </a>
            </div>

            <p>
                {{ $post['artikel'] }}
            </p>

            <a href="/posts" class="btn btn-outline-secondary mt-4">
                ← Kembali ke Blog
            </a>
        </div>
    </div>
</x-layout>
