@props([
    'href',
    'aktif' => false,
])

@php
    $cek = $aktif ? 'active' : '';
@endphp

<li class="nav-item {{ $cek }}">
    <a {{ $attributes->merge(['class' => 'nav-link']) }} href="{{ $href }}">
        {{ $slot }}
    </a>
</li>
