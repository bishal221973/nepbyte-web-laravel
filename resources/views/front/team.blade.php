@extends('layouts.guestLayout')

@section('content')
    <x-breadcrumb title="Our team" page="Our team" />

    {{-- <img src="{{ asset('brandBg.png') }}" class="hero-bg" alt="Brand Background"> --}}
    {{-- <div class="hero-overlay"></div> --}}
    <section class="ai-hero">

        <div class="" style="margin-top: 5vh;padding:0">
            <div class="">
                {{-- <div class="flex justify-center animate__animated animate__bounceIn">
                    <img src="/images/border1.png" class="d-block mx-auto" style="width:200px;opacity: 0.5" alt="" />
                </div> --}}


                <div class="my-carosel animate__animated animate__zoomIn">
                    <div class="group">
                        <div class="myCard">
                            <img src="{{ asset('images/user.jpg') }}" alt="">

                            <h5 class="text-center">Bishal Chaudhary</h5>
                            <b class="d-block mx-auto w-100 text-center">Developer</b>
                        </div>
                        <div class="myCard">
                            <img src="{{ asset('images/user.jpg') }}" alt="">

                            <h5 class="text-center">Bishal Chaudhary</h5>
                            <b class="d-block mx-auto w-100 text-center">Developer</b>
                        </div>
                        <div class="myCard">
                            <img src="{{ asset('images/user.jpg') }}" alt="">

                            <h5 class="text-center">Bishal Chaudhary</h5>
                            <b class="d-block mx-auto w-100 text-center">Developer</b>
                        </div>
                        <div class="myCard">
                            <img src="{{ asset('images/user.jpg') }}" alt="">

                            <h5 class="text-center">Bishal Chaudhary</h5>
                            <b class="d-block mx-auto w-100 text-center">Developer</b>
                        </div>
                        <div class="myCard">
                            <img src="{{ asset('images/user.jpg') }}" alt="">

                            <h5 class="text-center">Bishal Chaudhary</h5>
                            <b class="d-block mx-auto w-100 text-center">Developer</b>
                        </div>
                        <div class="myCard">
                            <img src="{{ asset('images/user.jpg') }}" alt="">

                            <h5 class="text-center">Bishal Chaudhary</h5>
                            <b class="d-block mx-auto w-100 text-center">Developer</b>
                        </div>
                        <div class="myCard">
                            <img src="{{ asset('images/user.jpg') }}" alt="">

                            <h5 class="text-center">Bishal Chaudhary</h5>
                            <b class="d-block mx-auto w-100 text-center">Developer</b>
                        </div>

                    </div>

                    <div class="group" aria-hidden>
                        <div class="myCard">
                            <img src="{{ asset('images/user.jpg') }}" alt="">

                            <h5 class="text-center">Bishal Chaudhary</h5>
                            <b class="d-block mx-auto w-100 text-center">Developer</b>
                        </div>
                        <div class="myCard">
                            <img src="{{ asset('images/user.jpg') }}" alt="">

                            <h5 class="text-center">Bishal Chaudhary</h5>
                            <b class="d-block mx-auto w-100 text-center">Developer</b>
                        </div>
                        <div class="myCard">
                            <img src="{{ asset('images/user.jpg') }}" alt="">

                            <h5 class="text-center">Bishal Chaudhary</h5>
                            <b class="d-block mx-auto w-100 text-center">Developer</b>
                        </div>
                        <div class="myCard">
                            <img src="{{ asset('images/user.jpg') }}" alt="">

                            <h5 class="text-center">Bishal Chaudhary</h5>
                            <b class="d-block mx-auto w-100 text-center">Developer</b>
                        </div>
                        <div class="myCard">
                            <img src="{{ asset('images/user.jpg') }}" alt="">

                            <h5 class="text-center">Bishal Chaudhary</h5>
                            <b class="d-block mx-auto w-100 text-center">Developer</b>
                        </div>
                        <div class="myCard">
                            <img src="{{ asset('images/user.jpg') }}" alt="">

                            <h5 class="text-center">Bishal Chaudhary</h5>
                            <b class="d-block mx-auto w-100 text-center">Developer</b>
                        </div>
                        <div class="myCard">
                            <img src="{{ asset('images/user.jpg') }}" alt="">

                            <h5 class="text-center">Bishal Chaudhary</h5>
                            <b class="d-block mx-auto w-100 text-center">Developer</b>
                        </div>
                    </div>
                </div>

                <div class="white-bg">
                    <h1 class="text-center text-uppercase">Have some questions</h1>
                    <div class="d-flex contact-info gap-3 justify-content-center">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-phone"></i>
                            <span>+977-9814668499</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fa fa-envelope"></i>
                            <span>bishalcodeslaravel@gmail.com</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fa fa-location-dot"></i>
                            <span>Nepalgunj, Banke</span>
                        </div>
                    </div>

                    <div style="padding-right: 10%;position: relative;">
                        {{-- <div class="half-circle-container"></div> --}}
                        <div class="d-flex align-items-center">
                            <div class="w-100">
                                <img src="{{ asset('images/email.gif') }}" class="w-100" alt="">
                            </div>
                            <div class="w-100">
                                <div class="bg-white rounded shadow p-3 mt-5">
                                    <h3>Contact us</h3>
                                    <small>Send your enquery</small>

                                    <hr class="text-secondary">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <label for="">Full name</label>
                                                <input type="text" class="form-control" placeholder="Full name">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <label for="">Email</label>
                                                <input type="email" class="form-control" placeholder="Email address">
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <div class="form-group">
                                                <label for="">Subject</label>
                                                <input type="text" class="form-control" placeholder="Subject">
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <div class="form-group">
                                                <label for="">Subject</label>
                                                <textarea class="form-control" rows="4" placeholder="Enter your message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12 d-flex justify-content-end">
                                            <button class="send-btn">Send message</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

    </section>
@endsection

<style>
    .myCard {
        width: 200px;
    }

    .myCard img {
        height: 100px;
        width: 100px;
        border-radius: 50%;
        display: block;
        margin: auto;
        margin-bottom: 50px
    }

    .white-bg {
        background-color: #f2f2f2;
        width: 100%;
        /* height: 100vh; */
        position: absolute;
        top: 330px;
        z-index: -1;
        padding-top: 160px;
    }

    .myCard h5 {
        color: #789EC3
    }

    .myCard b {
        color: #999
    }

    .contact-info i {
        color: #789EC3
    }
    .send-btn{
        background-color: #789EC3;
        border: none;
        padding: 10px 20px;
        border-radius: 10px;
        color: #fff;   
    }
   .half-circle-container {
    height:200px;              /* half of width */
    width: 500px;
    background-color: transparent;
    position: absolute;
    left: calc(50vw - 250px);
    top: 50px;

    border-top-left-radius: 250px;
    border-top-right-radius: 250px;

    border: 5px solid #789EC3;
    border-bottom: none;        /* remove bottom border */

    z-index: -1;
}
</style>
