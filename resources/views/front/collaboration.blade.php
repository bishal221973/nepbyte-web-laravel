@extends('layouts.guestLayout')

@section('content')
    <div class="row" style="height: calc(100vh - 100px)">
        
        <!-- Left Side -->
        <div class="col-md-6 d-flex flex-column justify-content-center ps-5">
            <h1 class="fw-bold display-4 text-primary">
                Creative Team
            </h1>

            <p class="text-muted fs-5 mt-3" style="max-width:500px">
                Turning creative ideas into powerful designs and meaningful experiences.
            </p>
        </div>

        <!-- Right Side -->
        <div class="col-md-6 d-flex align-items-center justify-content-center">

            <div style="position: relative">

                <!-- Top User -->
                <div class="user-circle user-circle1">
                    <img src="{{ asset('user.png') }}" alt="">
                </div>

                <!-- Arrow -->
                <img src="{{ asset('rotate.png') }}" alt="" class="arrow1">

                <div class="d-flex align-items-center justify-content-center">

                    <!-- Left User -->
                    <div class="user-circle user-circle2">
                        <img src="{{ asset('user.png') }}" alt="">
                    </div>

                    <!-- Arrow -->
                    <img src="{{ asset('rotate.png') }}" alt="" class="arrow2">

                    <!-- Center -->
                    <div class="handshake mx-4">
                        <i class="fa-solid fa-handshake"></i>
                    </div>

                    <!-- Right User -->
                    <div class="user-circle user-circle2">
                        <img src="{{ asset('user.png') }}" alt="">
                    </div>

                    <!-- Arrow -->
                    <img src="{{ asset('rotate.png') }}" alt="" class="arrow3">

                </div>
            </div>

        </div>
    </div>
@endsection


<style>
    body {
        background: linear-gradient(to right, #f5f9ff, #ffffff);
        overflow-x: hidden;
    }

    /* USER CIRCLE */
    .user-circle {
        height: 160px;
        width: 160px;
        background-color: #789EC3;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        border: 5px solid #fff;
        box-shadow: rgba(0, 0, 0, 0.2) 0px 10px 25px;
        animation: float 4s ease-in-out infinite;
        transition: .3s;
    }

    .user-circle:hover {
        transform: scale(1.05);
    }

    .user-circle1 {
        margin: 0 auto;
        animation-delay: 0s;
    }

    .user-circle2 {
        position: relative;
        top: 30px;
        animation-delay: 1s;
    }

    .user-circle img {
        height: 120px;
        width: 120px;
        object-fit: contain;
        /* animation: rotateUser 10s linear infinite; */
    }

    /* HANDSHAKE */
    .handshake {
        font-size: 55px;
        color: #789EC3;
        background-color: #fff;
        height: 140px;
        width: 140px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        box-shadow: rgba(0, 0, 0, 0.2) 0px 10px 25px;
        animation: pulse 2s infinite;
    }

    /* ARROWS */
    .arrow1,
    .arrow2,
    .arrow3 {
        position: absolute;
        height: 80px;
        animation: arrowBounce 2s infinite ease-in-out;
    }

    .arrow1 {
        transform: rotate(-30deg) !important;
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

    /* FLOAT */
    @keyframes float {
        0% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-15px);
        }

        100% {
            transform: translateY(0px);
        }
    }

    /* USER IMAGE ROTATE */
    @keyframes rotateUser {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    /* HANDSHAKE PULSE */
    @keyframes pulse {
        0% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.08);
        }

        100% {
            transform: scale(1);
        }
    }

    /* ARROW BOUNCE */
    @keyframes arrowBounce {
        0% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-10px);
        }

        100% {
            transform: translateY(0px);
        }
    }

    /* RESPONSIVE */
    @media(max-width:768px) {

        .user-circle {
            height: 120px;
            width: 120px;
        }

        .user-circle img {
            height: 80px;
            width: 80px;
        }

        .handshake {
            height: 100px;
            width: 100px;
            font-size: 40px;
        }

        .arrow1,
        .arrow2,
        .arrow3 {
            height: 55px;
        }
    }
</style>