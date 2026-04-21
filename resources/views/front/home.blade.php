@extends('layouts.guestLayout')
@section('content')
    <div class="d-flex justify-content-center mt-3 mt-[2%]">
        <div class="main-title animate__animated animate__zoomIn">
            <h1 class="text-white">Complete Business Engine</h4>

        </div>
    </div>
    <div style="margin-top: 10px" class=" animate__animated animate__slideInDown">
        <label style="color: #fff;" class="description d-block text-center">From Strategy to Branding, Production to AI - We
            Do It All.</label> <br>
        {{-- <small style="color: #fff;" class="description d-block text-center">Buil't for Speed. Engineered for Scale. We provide the integrated power your business needs to dominate.</small> --}}
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
                        @foreach ($brands as $brand)
                            <a target="__blank" title="{{$brand->name}}" href="{{$brand->url}}" class="card1">
                                <img src="/storage/{{$brand?->logo}}" alt="">
                            </a>
                        @endforeach

                    </div>

                    <div class="group" aria-hidden>
                      @foreach ($brands as $brand)
                            <a target="__blank" title="{{$brand->name}}" href="{{$brand->url}}" class="card1">
                                <img src="/storage/{{$brand?->logo}}" alt="">
                            </a>
                        @endforeach
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
