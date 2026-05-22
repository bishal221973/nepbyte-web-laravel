@extends('layouts.guestLayout')

@section('content')
    <x-breadcrumb page="About Us" />

    {{-- <div class="hero-overlay"></div> --}}
    @include('/front/includes/aboutStory')
    @include('/front/includes/missionVision')
    @include('/front/includes/award')
    @include('/front/includes/testimonial')
    @include('/front/includes/faq')

    <section class="brand-sub-content">

        <div class="container pb-5">

            

        </div>

    </section>

@endsection


<style>
    

    @media (max-width: 768px) {

        .ai-title {
            font-size: 40px
        }

        .brand-sub-content {
            position: relative !important;
        }

        .brand-project {
            background: #f2f2f2;
            position: relative;
            margin-top: -200px;
        }

    }

    @media (max-width: 600px) {

        .ai-title {
            font-size: 35px
        }


    }

    @media (max-width: 510px) {

        .ai-title {
            font-size: 30px
        }

        .ai-subtitle {
            font-size: 16px
        }

        .hero-btns a {
            padding: 10px 20px 5px 20px !important;
            font-size: 13px
        }


    }
</style>
