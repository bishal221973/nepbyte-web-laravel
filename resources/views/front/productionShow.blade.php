@extends('layouts.guestLayout')

@section('content')
<x-breadcrumb title="{{$contentCategory?->name}}" page="Content Production" />

<section class="ai-hero">
    {{-- {{$contentCategory?->name}} --}}

    <canvas id="canvas"></canvas>

    <div class="container gallery-wrapper">

        <div class="masonry" id="lightgallery">

            @foreach ($contentCategory->contentImages as $img)
                <a href="{{ asset('storage/' . $img->image) }}" class="gallery-item">
                    <img src="{{ asset('storage/' . $img->image) }}" loading="lazy" alt="">
                </a>
            @endforeach

        </div>

    </div>
</section>
@endsection


{{-- ================= STYLE ================= --}}
<style>
.ai-hero {
    position: relative;
    min-height: 100vh;
    padding: 60px 0;
    overflow: hidden;
}

/* canvas background */
canvas {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    z-index: 0;
}

/* wrapper */
.gallery-wrapper {
    position: relative;
    z-index: 2;
}

/* masonry layout */
.masonry {
    column-count: 3;
    column-gap: 16px;
}

/* gallery item */
.gallery-item {
    display: block;
    margin-bottom: 16px;
    break-inside: avoid;
    border-radius: 14px;
    overflow: hidden;
    transition: transform 0.3s ease;
}

/* ✅ FIXED IMAGE (NO CROP) */
.gallery-item img {
    width: 100%;
    height: auto; /* 🔥 important */
    display: block;
    border-radius: 14px;
}

/* hover effect */
.gallery-item:hover {
    transform: scale(1.02);
}

/* responsive */
@media (max-width: 992px) {
    .masonry { column-count: 2; }
}

@media (max-width: 576px) {
    .masonry { column-count: 1; }
}
</style>


{{-- ================= SCRIPT ================= --}}
@push('script')

<!-- LightGallery CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/css/lightgallery-bundle.min.css">

<!-- LightGallery JS -->
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/lightgallery.min.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {

    const gallery = document.getElementById("lightgallery");

    if (!gallery) return;

    lightGallery(gallery, {
        selector: 'a',
        speed: 400,
        download: false,
        thumbnail: true,
        zoom: true
    });

});
</script>

@endpush