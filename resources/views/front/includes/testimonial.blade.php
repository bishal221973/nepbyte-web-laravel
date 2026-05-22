<section class="testimonial-section">

    <!-- Background -->
    <div class="testimonial-bg"></div>
    <div class="testimonial-overlay"></div>

    <div class="container position-relative">

        <!-- Heading -->
        <div class="text-center testimonial-header">

            <span class="testimonial-tag">
                CLIENT TESTIMONIALS
            </span>

            <h1 class="testimonial-title">
                What Our Clients <span>Say About Us</span>
            </h1>

            <p class="testimonial-desc">
                Trusted by businesses, startups, and growing brands
                for delivering impactful digital solutions and creative excellence.
            </p>

        </div>

        <!-- Slider -->
        <div id="testimonialCarousel"
            class="carousel slide"
            data-bs-ride="carousel"
            data-bs-interval="4000">

            <div class="carousel-inner">

                <!-- ITEM 1 -->
                <div class="carousel-item active">

                    <div class="testimonial-card">

                        <div class="row align-items-center gy-4">

                            <div class="col-lg-4">
                                <img src="{{asset('user.png')}}" class="testimonial-image" alt="">
                            </div>

                            <div class="col-lg-8">

                                <div class="testimonial-content">

                                    <div class="quote-icon">
                                        <i class="fas fa-quote-left"></i>
                                    </div>

                                    <p class="testimonial-text">
                                        Surkhet Soft transformed our business with modern website,
                                        branding strategy, and digital marketing solutions.
                                    </p>

                                    <h4>John Doe</h4>
                                    <span>CEO, Tech Company</span>

                                </div>

                            </div>

                        </div>
                    </div>

                </div>

                <!-- ITEM 2 -->
                <div class="carousel-item">

                    <div class="testimonial-card">

                        <div class="row align-items-center gy-4">

                            <div class="col-lg-4">
                                <img src="{{asset('user1.png')}}" class="testimonial-image" alt="">
                            </div>

                            <div class="col-lg-8">

                                <div class="testimonial-content">

                                    <div class="quote-icon">
                                        <i class="fas fa-quote-left"></i>
                                    </div>

                                    <p class="testimonial-text">
                                        Their AI automation helped us scale faster and improve engagement.
                                    </p>

                                    <h4>Sarah Wilson</h4>
                                    <span>Founder, Startup Hub</span>

                                </div>

                            </div>

                        </div>
                    </div>

                </div>

                <!-- ITEM 3 -->
                <div class="carousel-item">

                    <div class="testimonial-card">

                        <div class="row align-items-center gy-4">

                            <div class="col-lg-4">
                                <img src="{{asset('user3.png')}}" class="testimonial-image" alt="">
                            </div>

                            <div class="col-lg-8">

                                <div class="testimonial-content">

                                    <div class="quote-icon">
                                        <i class="fas fa-quote-left"></i>
                                    </div>

                                    <p class="testimonial-text">
                                        Highly professional team delivering quality digital solutions.
                                    </p>

                                    <h4>Michael Brown</h4>
                                    <span>Director, Creative Agency</span>

                                </div>

                            </div>

                        </div>
                    </div>

                </div>

            </div>

            <!-- Controls -->
            <button class="carousel-control-prev" type="button"
                data-bs-target="#testimonialCarousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>

            <button class="carousel-control-next" type="button"
                data-bs-target="#testimonialCarousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>

        </div>

    </div>
</section>

<!-- ================= STYLE ================= -->
<style>
.testimonial-section {
    position: relative;
    padding: 120px 0;
    overflow: hidden;
}

/* Background */
.testimonial-bg {
    position: absolute;
    inset: 0;
    background: url('bg.jpg') center/cover no-repeat;
    transform: scale(1.05);
}

.testimonial-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(
        135deg,
        rgba(120,158,195,0.92),
        rgba(120,158,195,0.85)
    );
}

/* Header */
.testimonial-header {
    max-width: 750px;
    margin: auto;
    margin-bottom: 70px;
}

.testimonial-tag {
    display: inline-block;
    padding: 10px 18px;
    border-radius: 50px;
    background: rgba(255,255,255,0.12);
    color: #fff;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 2px;
}

.testimonial-title {
    font-size: 60px;
    font-weight: 900;
    color: #fff;
    margin: 20px 0;
}

.testimonial-title span {
    color: #dbe9f7;
}

.testimonial-desc {
    color: rgba(255,255,255,0.85);
    font-size: 18px;
    line-height: 1.8;
}

/* Card */
.testimonial-card {
    background: rgba(255,255,255,0.08);
    border: 1px solid rgba(255,255,255,0.12);
    backdrop-filter: blur(14px);
    border-radius: 35px;
    padding: 40px;
}

/* Image */
.testimonial-image {
    width: 100%;
    height: 420px;
    object-fit: cover;
    border-radius: 25px;
}

/* Content */
.testimonial-content {
    padding-left: 20px;
}

.quote-icon {
    width: 70px;
    height: 70px;
    border-radius: 18px;
    background: rgba(255,255,255,0.12);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 26px;
    color: #fff;
    margin-bottom: 25px;
}

.testimonial-text {
    font-size: 18px;
    line-height: 1.9;
    color: rgba(255,255,255,0.9);
    margin-bottom: 25px;
}

.testimonial-content h4 {
    color: #fff;
    font-size: 24px;
    font-weight: 800;
}

.testimonial-content span {
    color: rgba(255,255,255,0.75);
}

/* Controls */
.carousel-control-prev,
.carousel-control-next {
    width: 55px;
    height: 55px;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(255,255,255,0.15);
    border-radius: 50%;
}

/* Responsive */
@media(max-width: 768px) {

    .testimonial-title {
        font-size: 36px;
    }

    .testimonial-image {
        height: 300px;
    }

    .testimonial-content {
        padding-left: 0;
    }
}
</style>

<!-- Bootstrap JS (IMPORTANT) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>