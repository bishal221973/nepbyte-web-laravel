@extends('layouts.guestLayout')
@section('content')
    <div class="d-flex justify-content-center mt-3 mt-[2%]">
        <div class="main-title animate__animated animate__zoomIn">
            <h4 class="">Complete Business Engine</h4>

        </div>
    </div>
    <div style="margin-top: 10px" class="d-flex justify-content-center animate__animated animate__slideInDown">
        <label style="color: #fff;" class="description">From Strategy to Branding, Production to AI - We Do It
            All.</label>
    </div>
    <div style="position: relative;min-height: 80vh; display: flex; flex-direction: column;justify-content: space-between;">
        <div class="mt-5 d-flex justify-content-center animate__animated animate__backInDown"
            style="gap:10px;position: relative;">
            <x-home-card />
        </div>
        
        <div class="footer-glass-container animate__animated animate__rubberBand" style="margin-top: 5vh">
            <div class="footer-glass">
                <h3 class=" text-center capitalize animate__animated animate__swing">
                    Trusted by leading brands
                </h3>
                {{-- <div class="flex justify-center animate__animated animate__bounceIn">
                    <img src="/images/border1.png" class="d-block mx-auto" style="width:200px;opacity: 0.5" alt="" />
                </div> --}}


                <div class="my-carosel animate__animated animate__zoomIn">
                    <div class="group">
                        <div class="card1">
                            <img  src="{{ asset('logos/logo1.png') }}" alt="">
                        </div>
                        <div class="card1">
                             <img  src="{{ asset('logos/logo2.png') }}" alt="">
                        </div>
                        <div class="card1">
                             <img  src="{{ asset('logos/logo3.png') }}" alt="">
                        </div>
                        <div class="card1">
                             <img  src="{{ asset('logos/logo4.png') }}" alt="">
                        </div>
                        <div class="card1">
                             <img  src="{{ asset('logos/logo2.png') }}" alt="">
                        </div>
                        <div class="card1">
                             <img  src="{{ asset('logos/logo3.png') }}" alt="">
                        </div>
                    </div>

                    <div class="group" aria-hidden>
                         <div class="card1">
                            <img  src="{{ asset('logos/logo1.png') }}" alt="">
                        </div>
                        <div class="card1">
                             <img  src="{{ asset('logos/logo2.png') }}" alt="">
                        </div>
                        <div class="card1">
                             <img  src="{{ asset('logos/logo3.png') }}" alt="">
                        </div>
                        <div class="card1">
                             <img  src="{{ asset('logos/logo4.png') }}" alt="">
                        </div>
                        <div class="card1">
                             <img  src="{{ asset('logos/logo2.png') }}" alt="">
                        </div>
                        <div class="card1">
                             <img  src="{{ asset('logos/logo3.png') }}" alt="">
                        </div>
                    </div>
                </div>
                    {{-- <img src="{{ asset('file.enc') }}" class="nav-logo" alt=""> --}}


                {{-- <hr>

                <small class="d-block text-center">
                    © 2024 Surkhet Soft. All rights reserved
                </small> --}}
            </div>
        </div>

    </div>
@endsection
