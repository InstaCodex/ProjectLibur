@props(['href','aktif' => false])

@php
    $cek = $aktif ? 'active fw-bold text-primary border-2 border-primary' : 'fw-medium';
@endphp

<a {{ $attributes->merge(['class' => 'nav-link ' . $cek]) }} href="{{ $href }}">{{ $slot }}</a>