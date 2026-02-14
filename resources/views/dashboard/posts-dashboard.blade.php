<x-layouts.app-sb-admin>
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Artikel</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <!-- Button kiri -->
            <a href="#" class="btn btn-primary">
                + Tambah Artikel Baru
            </a>

            <!-- Search kanan -->
            <form class="d-none d-sm-inline-block m-0" method="GET">
                <div class="input-group shadow rounded" style="width:300px;">
                    <input type="text" class="form-control border-0" name="search" placeholder="Search for..." autocomplete="off">
                    <button class="btn btn-primary" type="submit">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </form>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Kategori</th>
                            @if (Auth::user()->role == 'admin')
                                <th>Penulis</th>
                            @endif
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ Str::limit($post->judul, 50) }}</td>
                                <td>{{ $post->category->name }}</td>
                                @if (Auth::user()->role == 'admin')
                                    <td>{{ $post->penulis->name }}</td>
                                @endif
                                <td>
                                    <a href="/dashboard/data/detail/{{ $post->slug }}" class="btn btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        Detail
                                    </a>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        Hapus
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div style="width: 1130px">
            {{ $posts->links() }}
        </div>

    </div>

    @push('scripts')
        <!-- Page level plugins -->
        <script src="{{ asset('assets/vendor/chart.js/Chart.min.js') }}"></script>
        <!-- Page level custom scripts -->
        <script src="{{ asset('assets/js/demo/chart-area-demo.js') }}"></script>
        <script src="{{ asset('assets/js/demo/chart-pie-demo.js') }}"></script>
    @endpush
</x-layouts.app-sb-admin>
