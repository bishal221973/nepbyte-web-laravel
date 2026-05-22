<section class="mission-container">
    <div class="row g-0 align-items-stretch">

        <!-- LEFT -->
        <div class="col-lg-6 d-flex">
            <div class="image-container w-100">

                <img src="123.jpg" class="pic1" alt="">

                <div class="img-overlay"></div>

                <img src="picture1.png" class="circle1" alt="">

                <div class="about-content">
                    <h1 class="text-center text-white fw-bold mb-4">
                        About Surkhet Soft
                    </h1>

                    <p class="text-white text-center">
                        Surkhet Soft is a Nepal-based creative technology and digital
                        solutions company that focuses on branding, software
                        development, digital marketing, AI automation, video
                        production, and business growth solutions.
                    </p>
                </div>

            </div>
        </div>

        <!-- RIGHT -->
        <div class="col-lg-6 d-flex">
            <div class="mission-content">

                <h1 class="fw-bold">
                    Our <span>Mission</span> And <span>Vision</span>
                </h1>

                <div class="mission-box">
                    <b>Our Mission</b>

                    <p>
                        To empower businesses through innovative technology,
                        creative branding, and strategic digital solutions that
                        drive measurable growth.
                    </p>
                </div>

                <div class="mission-box">
                    <b>Our Vision</b>

                    <p>
                        To become a leading global digital innovation company
                        recognized for transforming ideas into powerful brands,
                        intelligent systems, and scalable business solutions.
                    </p>
                </div>

                <img src="picture2.png" class="circle2" alt="">
            </div>
        </div>

    </div>
</section>

<style>
    .mission-container {
        overflow: hidden;
        background: #fff;
    }

    .mission-container .row {
        min-height: 650px;
    }

    /* LEFT SIDE */
    .image-container {
        position: relative;
        height: 650px;
        /* min-height: 650px; */
        overflow: hidden;

        border-top-right-radius: 320px;
        border-bottom-right-radius: 320px;
    }

    .pic1 {
        width: 100%;
        height: 650px;
        object-fit: cover;
    }

    .img-overlay {
        position: absolute;
        inset: 0;

        background: linear-gradient(
            135deg,
            rgba(120, 158, 195, 0.95),
            rgba(120, 158, 195, 0.6)
        );
    }

    .about-content {
        position: absolute;
        top: 50%;
        left: 50%;

        transform: translate(-50%, -50%);

        width: 80%;
        z-index: 5;
    }

    .about-content p {
        max-width: 420px;
        margin: auto;
        line-height: 1.9;
        font-size: 16px;
    }

    .circle1 {
        position: absolute;
        top: -50px;
        left: -20px;

        width: 260px;
        z-index: 10;
    }

    /* RIGHT SIDE */
    .mission-content {
        position: relative;

        width: 100%;
        height: 100%;

        padding: 80px 80px 80px 60px;

        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .mission-content h1 {
        font-size: 45px;
        margin-bottom: 40px;
    }

    .mission-content h1 span {
        color: #789EC3;
    }

    .mission-box {
        margin-bottom: 30px;
    }

    .mission-box b {
        display: block;
        margin-bottom: 10px;
        font-size: 20px;
    }

    .mission-box p {
        color: #555;
        line-height: 1.9;
        margin: 0;
        font-size: 16px;
    }

    .circle2 {
        position: absolute;
        bottom: 0;
        right: 0;
        width: 250px;
    }

    /* RESPONSIVE */
    @media(max-width: 991px) {

        .mission-container .row {
            min-height: auto;
        }

        .image-container {
            border-radius: 0 0 80px 80px;
            min-height: 500px;
        }

        .mission-content {
            padding: 60px 30px;
        }

        .mission-content h1 {
            font-size: 40px;
        }
    }

    @media(max-width: 576px) {

        .image-container {
            min-height: 420px;
        }

        .about-content h1 {
            font-size: 28px;
        }

        .about-content p {
            font-size: 14px;
        }

        .mission-content h1 {
            font-size: 32px;
        }

        .circle1 {
            width: 180px;
        }

        .circle2 {
            width: 120px;
        }
    }
</style>