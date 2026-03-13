<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('styles/guest.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/card.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @stack('style')
</head>

<body style="overflow-x: hidden">
    @include('front.includes.navbar')
    @yield('content')
</body>
<script src="https://cdn.jsdelivr.net/npm/animejs/dist/bundles/anime.umd.min.js"></script>
<script>
    const {
        animate
    } = anime;
</script>
<!-- GSAP & ScrollTrigger CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js" integrity="sha512-NcZdtrT77bJr4STcmsGAESr06BYGE8woZdSdEgqnpyqac7sugNO+Tr4bGwGF3MsnEkGKhU2KL2xh6Ec+BqsaHA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/ScrollTrigger.min.js" integrity="sha512-P2IDYZfqSwjcSjX0BKeNhwRUH8zRPGlgcWl5n6gBLzdi4Y5/0O4zaXrtO4K9TZK6Hn1BenYpKowuCavNandERg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
  gsap.registerPlugin(ScrollTrigger);

  var tl=gsap.timeline({scrollTrigger:{
    trigger:".main-ai-container",
    start:"0% 60%",
    end:"75% 80%",
    scrub:1.5,
    markers:false,
  }})

  tl.to(".robortImg",{
    top:"135%",
    left:"40%",
    height:"20vw",
    width:"20vw"
  })

  tl.to(".ai-card",{
    bottom:0,
    left:"10%",
  })
  tl.to(".ai-card1",{
    bottom:"38%",
    left:"22%",
  })

  tl.to(".ai-card2",{
    bottom:"55%",
    left:"42%",
  })


  tl.to(".ai-card3",{
    bottom:"38%",
    right:"22%",
  })


  tl.to(".ai-card4",{
    bottom:0,
    right:"10%",
  })




  var tl1=gsap.timeline({scrollTrigger:{
    trigger:".ai-project-list",
    start:"0% 60%",
    end:"75% 80%",
    scrub:1.5,
    markers:true,
  }})

    tl1.to(".robortImg",{
    top:"185%",
    left:"5%",
    height:"35vw",
    width:"35vw",
    opacity:0.1
  })

</script>

@stack('script')

</html>
