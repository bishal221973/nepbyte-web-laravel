@extends('layouts.guestLayout')

@section('content')

<x-breadcrumb title="Brand AI & Automation Solutions" page="AI / Automation" />

<section class="ai-hero">

    <img src="{{asset('herobg.png')}}" class="hero-bg" alt="AI Background">
    <div class="hero-overlay"></div>

    <div class="d-flex align-items-center">
        <img src="{{asset('robort.png')}}" class="robortImg" alt="AI Background">
        <img src="{{asset('robort.png')}}" class="robortImg1" alt="AI Background">
        <div class="hero-content">

            <h1 class="ai-title">
                The future
            </h1>

            <h1 class="ai-title">
                of development
            </h1>

            <h1 class="ai-title highlight">
                is human + AI
            </h1>

            <p class="hero-subtitle">
                Build smarter products faster with AI-powered development,
                automation and intelligent workflows.
            </p>

            <div class="hero-buttons">
                <a href="#" class="btn-primary">Explore Solutions</a>
                <a href="#" class="btn-outline">Contact Us</a>
            </div>

        </div>
    </div>
    
</section>
<x-half-circle-component/>

@endsection

<style>
    .ai-hero {
        /* position: relative; */
        height: 70vh;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }

    .hero-bg {
        position: absolute;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: -1;
        top: 0 !important;
        /* opacity: 0.5; */
    }

    .hero-overlay {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        background: linear-gradient(rgba(0, 0, 0, 0.7),
                rgba(0, 0, 0, 0.8));
        z-index: -1;
    }

    .hero-content {
        position: relative;
        z-index: 3;
        text-align: center;
        max-width: 80vw;
        margin-top: -100px;
    }

    .ai-title {
        font-size: 80px;
        font-weight: 700;
        color: #d0d0d0;
        margin: 0;
        line-height: 1.1;
    }

    .highlight {
        background: linear-gradient(90deg, #7f9cf5, #a78bfa);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .hero-subtitle {
        margin-top: 25px;
        color: #bbb;
        font-size: 20px;
        line-height: 1.6;
    }

    .hero-buttons {
        margin-top: 40px;
        display: flex;
        justify-content: center;
        gap: 20px;
    }

    .btn-primary {
        background: #7f9cf5;
        padding: 14px 32px;
        border-radius: 30px;
        color: #fff;
        text-decoration: none;
        font-weight: 600;
    }

    .btn-primary:hover {
        background: #6c84f2;
    }

    .btn-outline {
        border: 1px solid #7f9cf5;
        padding: 14px 32px;
        border-radius: 30px;
        color: #7f9cf5;
        text-decoration: none;
    }

    .btn-outline:hover {
        background: #7f9cf5;
        color: #fff;
    }
    .ai-sub-container{
        background: linear-gradient(180deg,#000,rgba(),#fff);
        min-height: 50vh;
    }
</style>