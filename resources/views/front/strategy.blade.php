@extends('layouts.guestLayout')
@section('content')
    <x-breadcrumb title="Our Strategy" page="Strategy" />

    <div class="w-100 row align-items-center" style="padding: 10px 10%">
        <div class="col-md-6">
            <h1 class="strategy-title uppercase animate__animated animate__zoomIn">
                <span class="fw-bold">Sales Funnel </span>
                <span>Strategy</span>
            </h1>
            <h1 class="strategy-sub-title animate__animated animate__zoomIn">
                <span>That </span>
                <span class="fw-bold">Converts Visitors </span>
                <span>into Customers </span>
            </h1>

            <span style="color: #e9e9e9" class="d-block my-4 animate__animated animate__zoomIn">We architect structured revenue systems that transform traffic
                into
                predictable growth.</span>

            <div class="flex gap-5 my-10 animate__animated animate__bounceInDown">

                <button class="btn funnel-btn text-white fw-bold px-4 py-3 rounded shadow">
                    Get Funnel Blueprint
                </button>
                <button class="btn strategy-btn fw-bold px-4 py-3 rounded shadow">
                    Book strategy call
                </button>
            </div>

            <div class="mt-5">

                <div class="d-flex align-items-center gap-3 mb-3 animate__animated animate__fadeInLeft">
                    <div class="list-circle d-flex justify-content-center align-items-center fw-bold"
                        style="height:35px;width:35px;background:white;font-size:14px;">
                        01
                    </div>
                    <h5 class="text-white fw-bold mb-0">Framework for Profit</h5>
                </div>

                <div class="d-flex align-items-center gap-3 mb-3 animate__animated animate__fadeInLeft" style="animation-delay: 0.2s">
                    <div class="list-circle d-flex justify-content-center align-items-center fw-bold"
                        style="height:35px;width:35px;background:white;font-size:14px;">
                        02
                    </div>
                    <h5 class="text-white fw-bold mb-0">Data Driven Execution</h5>
                </div>

                <div class="d-flex align-items-center gap-3 mb-3 animate__animated animate__fadeInLeft" style="animation-delay: 0.4s">
                    <div class="list-circle d-flex justify-content-center align-items-center fw-bold"
                        style="height:35px;width:35px;background:white;font-size:14px;">
                        03
                    </div>
                    <h5 class="text-white fw-bold mb-0">Scalable Growth System</h5>
                </div>

            </div>
        </div>
        <div class="col-md-6">
            @php
                $steps = [
                    [
                        'title' => 'Awareness',
                        'description' => 'Attracts qualified prospects',
                    ],
                    [
                        'title' => 'Lead Capture',
                        'description' => 'Capture contact details.',
                    ],
                    [
                        'title' => 'Nurture',
                        'description' => 'Build authority & credibility',
                    ],
                    [
                        'title' => 'Conversion',
                        'description' => 'Turn leads into customers.',
                    ],
                    [
                        'title' => 'Retention',
                        'description' => 'Keep your audience engaged',
                    ],
                ];
            @endphp
            <x-triangular-hierarchy :steps="$steps" />
        </div>
    </div>
@endsection
