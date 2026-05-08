@extends('layouts.guestLayout')

@section('content')

<div class="hero-wrapper">

    <!-- BACKGROUND SHAPES -->
    <div class="bg-shape shape1"></div>
    <div class="bg-shape shape2"></div>
    <div class="bg-shape shape3"></div>

    <div class="container-fluid">
        <div class="row hero-section">

            <!-- LEFT SIDE -->
            <div class="col-lg-6 d-flex flex-column justify-content-center left-side" style="padding-left: 10%">

                <span class="hero-badge">
                    Creative Digital Agency
                </span>

                <h1 class="hero-title">
                    Collaboration
                </h1>

                <p class="hero-description">
                    Turning creative ideas into powerful designs and meaningful
                    digital experiences for modern businesses and brands.
                </p>

                <!-- STATS -->
                <div class="hero-stats">

                    <div class="stat-box">
                        <h3>120+</h3>
                        <span>Projects</span>
                    </div>

                    <div class="stat-box">
                        <h3>80+</h3>
                        <span>Clients</span>
                    </div>

                    <div class="stat-box">
                        <h3>10+</h3>
                        <span>Years</span>
                    </div>

                </div>

                <!-- BUTTONS -->
                <div class="hero-buttons">

                    <button class="btn-primary-custom">
                        Get Started
                    </button>

                    <button class="btn-secondary-custom">
                        Become a partner
                    </button>

                </div>

            </div>

            <!-- RIGHT SIDE -->
            <div class="col-lg-6 d-flex align-items-center justify-content-center">

                <div class="team-wrapper">

                    <!-- TOP USER -->
                    <div class="user-circle user-circle1">
                        <img src="{{ asset('user.png') }}" alt="">
                    </div>

                    <!-- ARROW -->
                    <img src="{{ asset('rotate.png') }}" alt="" class="arrow1">

                    <div class="d-flex align-items-center justify-content-center">

                        <!-- LEFT USER -->
                        <div class="user-circle user-circle2">
                            <img src="{{ asset('user1.png') }}" alt="">
                        </div>

                        <!-- ARROW -->
                        <img src="{{ asset('rotate.png') }}" alt="" class="arrow2">

                        <!-- CENTER -->
                        <div class="handshake mx-3">
                            <i class="fa-solid fa-handshake"></i>
                        </div>

                        <!-- RIGHT USER -->
                        <div class="user-circle user-circle2">
                            <img src="{{ asset('user3.png') }}" alt="">
                        </div>

                        <!-- ARROW -->
                        <img src="{{ asset('rotate.png') }}" alt="" class="arrow3">

                    </div>

                    <!-- FLOATING CARDS -->
                    <div class="floating-card card1">
                        <i class="fa-solid fa-lightbulb"></i>
                        Creative Ideas
                    </div>

                    <div class="floating-card card2">
                        <i class="fa-solid fa-pen-ruler"></i>
                        Design Strategy
                    </div>

                    <div class="floating-card card3">
                        <i class="fa-solid fa-chart-line"></i>
                        Business Growth
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>
<x-growth/>
<x-collaborator/>

@endsection


<style>
    body {
        overflow-x: hidden;
        min-height: 100vh;

        background: linear-gradient(
            45deg,
            #789EC3,
            #5e86b0,
            #b3d0ec,
            #789EC3
        ) !important;

        background-size: 400% 400%;
        /* animation: gradientMove 12s ease infinite; */
    }

    .hero-wrapper {
        position: relative;
        overflow: hidden;
    }

    .hero-section {
        min-height: 92vh;
        position: relative;
        z-index: 2;
    }

    /* BACKGROUND SHAPES */
    .bg-shape {
        position: absolute;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.08);
        filter: blur(40px);
        z-index: 1;
    }

    .shape1 {
        width: 280px;
        height: 280px;
        top: -100px;
        left: -100px;
    }

    .shape2 {
        width: 240px;
        height: 240px;
        bottom: -60px;
        right: -60px;
    }

    .shape3 {
        width: 180px;
        height: 180px;
        top: 40%;
        left: 45%;
    }

    /* LEFT SIDE */
    .left-side {
        padding-left: 10%;
    }

    .hero-badge {
        width: fit-content;
        padding: 8px 18px;
        border-radius: 50px;
        background: rgba(255,255,255,0.15);
        color: white;
        font-size: 14px;
        font-weight: 600;
        backdrop-filter: blur(10px);
        margin-bottom: 20px;
    }

    .hero-title {
        font-size: 58px;
        font-weight: 800;
        color: white;
        line-height: 1.05;
        margin-bottom: 20px;
        text-shadow: 0 10px 25px rgba(0,0,0,0.12);
    }

    .hero-description {
        font-size: 16px;
        color: rgba(255,255,255,0.85);
        line-height: 1.8;
        max-width: 480px;
    }

    /* STATS */
    .hero-stats {
        display: flex;
        gap: 18px;
        margin-top: 25px;
    }

    .stat-box {
        background: rgba(255,255,255,0.12);
        padding: 14px 22px;
        border-radius: 16px;
        backdrop-filter: blur(10px);
        color: white;
        text-align: center;
        min-width: 95px;
    }

    .stat-box h3 {
        margin: 0;
        font-size: 22px;
        font-weight: 700;
    }

    .stat-box span {
        font-size: 12px;
        opacity: .8;
    }

    /* BUTTONS */
    .hero-buttons {
        margin-top: 30px;
        display: flex;
        gap: 15px;
    }

    .btn-primary-custom,
    .btn-secondary-custom {
        border: none;
        height: 48px;
        padding: 0 28px;
        border-radius: 50px;
        font-weight: 700;
        font-size: 14px;
        transition: .4s;
    }

    .btn-primary-custom {
        background: white;
        color: #789EC3;
    }

    .btn-secondary-custom {
        background: transparent;
        border: 1px solid rgba(255,255,255,0.4);
        color: white;
        backdrop-filter: blur(10px);
    }

    .btn-primary-custom:hover,
    .btn-secondary-custom:hover {
        transform: translateY(-5px);
    }

    /* TEAM WRAPPER */
    .team-wrapper {
        position: relative;
        z-index: 2;
    }

    /* USER CIRCLE */
    .user-circle {
        height: 135px;
        width: 135px;
        background: rgba(255,255,255,0.12);
        backdrop-filter: blur(10px);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        border: 1px solid rgba(255,255,255,0.25);
        box-shadow: 0 10px 25px rgba(0,0,0,0.12);
        animation: float 4s ease-in-out infinite;
    }

    .user-circle img {
        height: 90px;
        width: 90px;
        object-fit: contain;
    }

    .user-circle1 {
        margin: 0 auto;
    }

    .user-circle2 {
        position: relative;
        top: 25px;
    }

    /* HANDSHAKE */
    .handshake {
        position: relative;
        font-size: 42px;
        color: white;
        background: rgba(255,255,255,0.15);
        backdrop-filter: blur(10px);
        height: 120px;
        width: 120px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid rgba(255,255,255,0.25);
        animation: pulse 2s infinite;
        overflow: hidden;
    }

    .handshake::after {
        content: '';
        position: absolute;
        width: 180px;
        height: 180px;

        background: linear-gradient(
            90deg,
            transparent,
            rgba(255,255,255,0.35),
            transparent
        );

        animation: rotateGlow 4s linear infinite;
    }

    /* ARROWS */
    .arrow1,
    .arrow2,
    .arrow3 {
        position: absolute;
        height: 60px;
        animation: arrowBounce 2s infinite ease-in-out;
    }

    .arrow1 {
        transform: rotate(-30deg);
        top: 25%;
        right: 72%;
    }

    .arrow2 {
        transform: rotate(90deg) !important;
        top: 25%;
        left: 72%;
    }

    .arrow3 {
        transform: rotate(220deg) !important;
        top: 100%;
        right: 42%;
    }

    /* FLOATING CARDS */
    .floating-card {
        position: absolute;
        background: rgba(255,255,255,0.15);
        backdrop-filter: blur(12px);
        padding: 10px 18px;
        border-radius: 12px;
        color: white;
        font-size: 13px;
        font-weight: 600;
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        animation: float 4s infinite ease-in-out;
    }

    .floating-card i {
        margin-right: 8px;
    }

    .card1 {
        top: 10%;
        left: -5%;
    }

    .card2 {
        top: 12%;
        right: 0%;
    }

    .card3 {
        bottom: -5%;
        left: 28%;
    }

    /* ANIMATIONS */
    @keyframes gradientMove {

        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }

    @keyframes float {

        0% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-12px);
        }

        100% {
            transform: translateY(0px);
        }
    }

    @keyframes pulse {

        0% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.06);
        }

        100% {
            transform: scale(1);
        }
    }

    @keyframes arrowBounce {

        0% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-8px);
        }

        100% {
            transform: translateY(0px);
        }
    }

    @keyframes rotateGlow {

        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    /* RESPONSIVE */
    @media(max-width:991px) {

        .left-side {
            padding: 60px 30px !important;
            text-align: center;
            align-items: center;
        }

        .hero-title {
            font-size: 42px;
        }

        .hero-stats {
            justify-content: center;
            flex-wrap: wrap;
        }

        .hero-buttons {
            justify-content: center;
            flex-wrap: wrap;
        }

        .team-wrapper {
            margin-top: 50px;
            margin-bottom: 100px;
        }

        .user-circle {
            height: 100px;
            width: 100px;
        }

        .user-circle img {
            height: 65px;
            width: 65px;
        }

        .handshake {
            height: 85px;
            width: 85px;
            font-size: 32px;
        }

        .arrow1,
        .arrow2,
        .arrow3 {
            height: 45px;
        }

        .floating-card {
            display: none;
        }
    }
    /* LARGE SCREEN BALANCE */
@media(min-width:1400px){

    .hero-section{
        min-height: 85vh;
        max-width: 1400px;
        margin: 0 auto;
    }

    .left-side{
        padding-left: 10% !important;
    }

    .hero-title{
        font-size: 65px;
    }

    .hero-description{
        font-size: 20px;
        max-width: 430px;
    }

    .hero-stats{
        gap: 14px;
    }

    .stat-box{
        padding: 20px 40px;
        min-width: 85px;
    }

    .stat-box h3{
        font-size: 25px;
    }

    .btn-primary-custom,
    .btn-secondary-custom{
        height: 55px;
        padding: 0 35px;
        font-size: 18px;
    }

    /* TEAM */
    .team-wrapper{
        transform: scale(1.25);
    }

    .floating-card{
        font-size: 12px;
        padding: 8px 14px;
    }

    .card1{
        left: 0%;
    }

    .card2{
        right: 2%;
    }

    .card3{
        bottom: 0%;
    }
}

/* EXTRA LARGE MONITORS */
@media(min-width:1700px){
    
    .hero-section{
        max-width: 1500px;
    }

    .team-wrapper{
        transform: scale(1.1);
    }

    .hero-title{
        font-size: 48px;
    }

    .hero-description{
        max-width: 400px;
    }
}
</style>