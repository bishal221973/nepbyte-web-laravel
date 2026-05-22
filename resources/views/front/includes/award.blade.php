<section class="award-section">
    <div class="container position-relative">

        <!-- Glow -->
        <div class="award-glow"></div>

        <div class="row align-items-center gy-5">

            <!-- LEFT CONTENT -->
            <div class="col-lg-6">

                <span class="award-tag">
                    🏆 ACHIEVEMENT
                </span>

                <h1 class="award-title">
                    Proud Winner Of <br>
                    <span>ICT Award 2022</span>
                </h1>

                <p class="award-desc">
                    Surkhet Soft proudly received the prestigious ICT Award 2022,
                    recognizing our innovation, creativity, and contribution in the
                    field of technology and digital transformation in Nepal.
                </p>

                <div class="award-points">

                    <div class="award-point">

                        <div class="award-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>

                        <div>
                            <h5>Innovation & Creativity</h5>

                            <p>
                                Recognized for building impactful digital solutions,
                                AI automation systems, and creative branding experiences.
                            </p>
                        </div>

                    </div>

                    <div class="award-point">

                        <div class="award-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>

                        <div>
                            <h5>Business Growth Impact</h5>

                            <p>
                                Helping businesses scale through technology,
                                marketing strategy, and digital transformation.
                            </p>
                        </div>

                    </div>

                    <div class="award-point">

                        <div class="award-icon">
                            <i class="fas fa-users"></i>
                        </div>

                        <div>
                            <h5>Trusted By Businesses</h5>

                            <p>
                                Delivering modern software solutions and creative
                                services trusted by growing brands and organizations.
                            </p>
                        </div>

                    </div>

                </div>

                

            </div>

            <!-- RIGHT SIDE -->
            <div class="col-lg-6">

                <!-- MAIN IMAGE -->
                <div class="award-image-wrapper">

                    <img src="{{asset('/awards/8.jpg')}}"
                        class="award-main-img"
                        alt="ICT Award 2022">

                    <div class="award-overlay"></div>

                    <!-- FLOATING CARD -->
                    <div class="award-floating-card">

                        <h3>ICT Award 2022</h3>

                        <p>
                            Celebrating innovation, technology,
                            and digital excellence.
                        </p>

                    </div>

                    <!-- BADGE -->
                    <div class="award-badge">
                        <span>#1</span>
                    </div>

                </div>

                <!-- SMALL IMAGE GALLERY -->
                <div class="award-gallery">

                    <div class="gallery-item">
                        <img src="{{asset('/awards/1.jpg')}}" alt="">
                    </div>

                    <div class="gallery-item">
                        <img src="{{asset('/awards/2.jpg')}}" alt="">
                    </div>

                    <div class="gallery-item">
                        <img src="{{asset('/awards/5.jpg')}}" alt="">
                    </div>

                    <div class="gallery-item">
                        <img src="{{asset('/awards/4.jpg')}}" alt="">
                    </div>

                </div>

            </div>

        </div>
    </div>
</section>

<style>
    .award-section {
        position: relative;
        padding: 80px 0;
        overflow: hidden;
        background: #f2f2f2;
    }

    /* Glow */

    .award-glow {
        position: absolute;
        width: 500px;
        height: 500px;
        background: rgba(120, 158, 195, 0.18);
        filter: blur(120px);
        border-radius: 50%;
        top: -150px;
        right: -120px;
    }

    /* Tag */

    .award-tag {
        display: inline-block;

        padding: 10px 18px;
        border-radius: 50px;

        background: rgba(120, 158, 195, 0.12);
        border: 1px solid rgba(120, 158, 195, 0.15);

        color: #789EC3;

        font-size: 13px;
        font-weight: 700;
        letter-spacing: 2px;

        margin-bottom: 10px;
    }

    /* Title */

    .award-title {
        font-size: 64px;
        line-height: 1.05;
        font-weight: 900;
        color: #111;
        margin-bottom: 10px;
        letter-spacing: -2px;
    }

    .award-title span {
        color: #789EC3;
    }

    /* Description */

    .award-desc {
        color: #555;
        font-size: 18px;
        line-height: 1.9;
        margin-bottom: 20px;
        max-width: 620px;
    }

    /* Award Points */

    .award-points {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .award-point {
        display: flex;
        gap: 18px;
        align-items: flex-start;

        background: #fff;
        border: 1px solid rgba(0, 0, 0, 0.06);

        border-radius: 24px;

        padding: 20px;

        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);

        transition: .35s ease;
    }

    .award-point:hover {
        transform: translateY(-6px);
        box-shadow: 0 18px 40px rgba(0, 0, 0, 0.08);
    }

    .award-icon {
        width: 65px;
        height: 65px;
        min-width: 65px;

        border-radius: 18px;

        background: linear-gradient(
            135deg,
            #789EC3,
            #5c84ae
        );

        display: flex;
        align-items: center;
        justify-content: center;

        color: #fff;
        font-size: 24px;
    }

    .award-point h5 {
        color: #111;
        font-weight: 700;
        margin-bottom: 8px;
    }

    .award-point p {
        margin: 0;
        color: #666;
        line-height: 1.8;
        font-size: 15px;
    }

    /* Button */

    .award-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;

        margin-top: 45px;

        padding: 15px 32px;
        border-radius: 60px;

        background: linear-gradient(
            135deg,
            #789EC3,
            #5c84ae
        );

        color: #fff;
        text-decoration: none;
        font-weight: 700;

        transition: .35s ease;
    }

    .award-btn:hover {
        transform: translateY(-4px);
        color: #fff;

        box-shadow: 0 20px 50px rgba(120, 158, 195, 0.35);
    }

    /* Main Image */

    .award-image-wrapper {
        position: relative;
        border-radius: 40px;
        overflow: hidden;
    }

    .award-main-img {
        width: 100%;
        height: 580px;
        object-fit: cover;
        border-radius: 40px;
    }

    .award-overlay {
        position: absolute;
        inset: 0;

        background: linear-gradient(
            to top,
            rgba(0, 0, 0, 0.65),
            rgba(0, 0, 0, 0.05)
        );
    }

    /* Floating Card */

    .award-floating-card {
        position: absolute;

        bottom: 30px;
        right: 30px;

        padding: 22px 26px;

        background: rgba(255, 255, 255, 0.12);

        border: 1px solid rgba(255, 255, 255, 0.18);

        backdrop-filter: blur(12px);

        border-radius: 24px;

        max-width: 320px;
    }

    .award-floating-card h3 {
        color: #fff;
        font-weight: 800;
        margin-bottom: 10px;
    }

    .award-floating-card p {
        color: rgba(255, 255, 255, 0.85);
        margin: 0;
        line-height: 1.7;
    }

    /* Badge */

    .award-badge {
        position: absolute;

        top: 25px;
        right: 25px;

        width: 85px;
        height: 85px;

        border-radius: 50%;

        background: linear-gradient(
            135deg,
            #789EC3,
            #6e9bc9
        );

        display: flex;
        align-items: center;
        justify-content: center;

        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
    }

    .award-badge span {
        font-size: 28px;
        font-weight: 900;
        color: #fff;
    }

    /* Gallery */

    .award-gallery {
        display: flex;
        gap: 16px;
        margin-top: 22px;
    }

    .gallery-item {
        flex: 1;

        height: 110px;

        border-radius: 20px;
        overflow: hidden;

        border: 3px solid rgba(255, 255, 255, 0.7);

        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);

        transition: .35s ease;
    }

    .gallery-item:hover {
        transform: translateY(-5px) scale(1.03);
    }

    .gallery-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* Responsive */

    @media(max-width: 1200px) {

        .award-title {
            font-size: 56px;
        }
    }

    @media(max-width: 991px) {

        .award-section {
            padding: 90px 0;
        }

        .award-title {
            font-size: 48px;
        }

        .award-main-img {
            height: 520px;
        }
    }

    @media(max-width: 768px) {

        .award-title {
            font-size: 40px;
            line-height: 1.15;
        }

        .award-desc {
            font-size: 16px;
        }

        .award-main-img {
            height: 420px;
        }

        .award-gallery {
            gap: 10px;
        }

        .gallery-item {
            height: 80px;
        }

        .award-floating-card {
            left: 20px;
            right: 20px;
            bottom: 20px;
            max-width: initial;
        }
    }

    @media(max-width: 500px) {

        .award-section {
            padding: 70px 0;
        }

        .award-title {
            font-size: 34px;
        }

        .award-main-img {
            height: 340px;
        }

        .gallery-item {
            height: 65px;
            border-radius: 14px;
        }

        .award-badge {
            width: 65px;
            height: 65px;
        }

        .award-badge span {
            font-size: 20px;
        }
    }
</style>