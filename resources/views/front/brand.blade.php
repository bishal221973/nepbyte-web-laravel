@extends('layouts.guestLayout')
@section('content')
<x-breadcrumb title="Brand Development" page="Branding" />

<section class="ai-hero">

        <img src="{{ asset('brandBg.png') }}" class="hero-bg" alt="AI Background">
        <div class="hero-overlay"></div>

        <div class="d-flex justify-content-between px-5 w-100 align-items-center">
            <div class="hero-content w-100">

                <h1 class="ai-title">
                    The future
                </h1>

                

            </div>
             <div class="hero-content w-100">

                <h1 class="ai-title">
                    The future
                </h1>

                

            </div>
        </div>

    </section>
    <div class="brand-sub-content"></div>

@endsection


<style>
    .ai-hero {
        /* position: relative; */
        height: 70vh;
        width: 100vw;
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
        left: 0 !important;
        /* opacity: 0.5; */
    }
    .hero-overlay {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        background: linear-gradient(rgba(0, 0, 0, 0.6),
                rgba(0, 0, 0, 0.5));
        z-index: -1;
        left: 0;
    }
    .brand-sub-content{
        height: 100vh;
        width: 100vw;
        background-color: #fff;
        position: relative;
    }
    .brand-sub-content::after{
        content: '';
        height: 250px;
        width: 70vw;
        background-color: #fff;
        position: absolute;
        left: -50px;
        top: -50px;
        z-index: 999;
        transform: rotate(10deg)
    }

    .brand-sub-content::before{
        content: '';
        height: 250px;
        width: 70vw;
        background-color: #fff;
        position: absolute;
        right: -50px;
        top: -50px;
        z-index: 999;
        transform: rotate(-10deg)
    }

</style>