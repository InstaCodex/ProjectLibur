<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ $title }} | Blog Sistem</title>
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-body-tertiary d-flex flex-column min-vh-100" style="font-family: &quot;Inter&quot;, sans-serif">
    <!-- Navbar -->
    <x-navbar />

    <main class="flex-grow-1">
        <div class="container py-5">
            {{ $slot }}
        </div>
    </main>

    <x-footer />

</body>

</html>
