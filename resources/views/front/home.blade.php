@extends('layouts.guestLayout')
@section('content')
    <div class="d-flex justify-content-center mt-3 mt-[2%]">
        <div class="main-title animate__animated animate__zoomIn">
            <h4 class="">One Team. One System. Total Business Growth.</h4>

        </div>
    </div>
    <div style="margin-top: 10px" class="d-flex justify-content-center animate__animated animate__slideInDown">
        <label style="color: #fff;" class="description">From Strategy to Branding, Production to AI - We Do It
            All.</label>
    </div>
    <div class="mt-5 d-flex justify-content-center animate__animated animate__backInDown" style="gap:10px">
        <x-home-card />

    </div>
@endsection
