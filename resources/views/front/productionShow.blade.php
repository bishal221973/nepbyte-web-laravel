@extends('layouts.guestLayout')

@section('content')
<x-breadcrumb title="Wedding Gallery" page="Content Production" />

<section class="ai-hero">

    <canvas id="canvas"></canvas>

    <div class="container gallery-wrapper">

        <div class="masonry" id="lightgallery">

            @php
                $images = [
                    'wedding.jpeg','event.jpg','custom.jpg','singer.jpg','commercial.jpg','ai.jpg',
                    'wedding.jpeg','event.jpg','custom.jpg','singer.jpg','commercial.jpg','ai.jpg',
                    'wedding.jpeg','event.jpg','custom.jpg','singer.jpg','commercial.jpg','ai.jpg',
                    'wedding.jpeg','event.jpg','custom.jpg','singer.jpg','commercial.jpg','ai.jpg',
                ];
            @endphp

            @foreach ($images as $img)
                <a href="{{ asset('images/'.$img) }}" class="gallery-item">
                    <img src="{{ asset('images/'.$img) }}" loading="lazy">
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

/* image base style */
.gallery-item img {
    width: 100%;
    display: block;
    object-fit: cover;
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

    // LightGallery init
    lightGallery(gallery, {
        selector: 'a',
        speed: 400,
        download: false,
        thumbnail: true,
        zoom: true
    });

    // 🎯 RANDOM HEIGHT PER IMAGE (TRUE ZIG-ZAG EFFECT)
    const images = document.querySelectorAll(".gallery-item img");

    images.forEach((img) => {

        const randomHeight = Math.floor(Math.random() * (420 - 200 + 1)) + 200;

        img.style.height = randomHeight + "px";
        img.style.objectFit = "cover";

    });

});
</script>

@endpush