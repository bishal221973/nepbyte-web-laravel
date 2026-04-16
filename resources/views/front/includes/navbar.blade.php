<div class="navbar-container animate__animated animate__zoomIn">
    <div class="navbar px-3 d-flex justify-content-between align-items-center">
        <img src="{{ asset('logo.jpg') }}" class="nav-logo" alt="">
        {{-- <h1 class="main-title">Surkhet Shoft</h1> --}}
        {{-- @include('front.includes.title') --}}
        <a href="#" class="nav-start-project">Collaboration</a>
    </div>
</div>


<a href="{{route('front.team')}}" class="text-decoration-none" style="position: absolute;right:4%;top:10px;height:50px;width:50px;background-color:transparent;border:0;padding:0;border-radius:50%">
    <img src="{{asset('images/team.png')}}" style="height: 100%;width:100%;object-fit:cover" alt="">
    <h5 class="text-white">Team</h5>
</a>