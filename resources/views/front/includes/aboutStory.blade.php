<section class="our-story-section">
    <div class="container">

        <div class="story-bg-glow"></div>

        <div class="row justify-content-center">
            <div class="col-xl-9 text-center">

                <span class="story-tag">
                    OUR STORY
                </span>

                <h1 class="story-title">
                    Your Vision <br>
                    <span>Our Expertise. Your Success.</span>
                </h1>

                <h3 class="story-subtitle">
                    Get Noticed. Generate Leads. Dominate.
                </h3>

                <p class="story-short-desc">
                    We combine creativity, technology, and strategy
                    to help businesses build powerful digital identities,
                    generate measurable growth, and dominate competitive markets.
                </p>

                <div class="row g-4 justify-content-center story-stats">

                    <div class="col-md-4 col-6">
                        <div class="story-counter-card">
                            <h2>150+</h2>
                            <p>Completed Projects</p>
                        </div>
                    </div>

                    <div class="col-md-4 col-6">
                        <div class="story-counter-card">
                            <h2>80+</h2>
                            <p>Happy Clients</p>
                        </div>
                    </div>

                    <div class="col-md-4 col-12">
                        <div class="story-counter-card">
                            <h2>5+</h2>
                            <p>Years Experience</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>
</section>

<style>
    .our-story-section {
        position: relative;
        padding: 40px 0;
        overflow: hidden;
        background:
            radial-gradient(circle at top left,
                rgba(255, 255, 255, 0.06),
                transparent 30%),
            radial-gradient(circle at bottom right,
                rgba(255, 255, 255, 0.04),
                transparent 25%);
    }

    /* Glow */
    .story-bg-glow {
        position: absolute;
        width: 500px;
        height: 500px;
        background: rgba(255, 255, 255, 0.05);
        filter: blur(120px);
        top: -150px;
        left: 50%;
        transform: translateX(-50%);
        z-index: 0;
    }

    .our-story-section .container {
        position: relative;
        z-index: 2;
    }

    /* Tag */
    .story-tag {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 10px 18px;
        border-radius: 50px;
        background: rgba(255, 255, 255, 0.08);
        border: 1px solid rgba(255, 255, 255, 0.1);

        color: rgba(255, 255, 255, 0.85);
        font-size: 13px;
        letter-spacing: 2px;
        font-weight: 700;
        margin-bottom: 28px;
        text-transform: uppercase;
        backdrop-filter: blur(10px);
    }

    /* Title */
    .story-title {
        font-size: 55px;
        line-height: 1.05;
        font-weight: 900;
        color: #fff;
        margin-bottom: 24px;
        letter-spacing: -2px;
    }

    .story-title span {
        background: linear-gradient(to right, #ffffff, #cfcfcf);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    /* Subtitle */
    .story-subtitle {
        font-size: 24px;
        font-weight: 600;
        color: rgba(255, 255, 255, 0.92);
        margin-bottom: 24px;
    }

    /* Description */
    .story-short-desc {
        max-width: 720px;
        margin: 0 auto;
        color: rgba(255, 255, 255, 0.7);
        font-size: 18px;
        line-height: 1.9;
    }

    /* Stats */
    .story-stats {
        margin-top: 40px;
    }

    .story-counter-card {
        position: relative;
        overflow: hidden;

        background: rgba(255, 255, 255, 0.07);
        border: 1px solid rgba(255, 255, 255, 0.08);
        backdrop-filter: blur(14px);

        border-radius: 28px;
        padding: 20px 20px;

        transition: all .35s ease;
    }

    .story-counter-card::before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(
            135deg,
            rgba(255,255,255,0.12),
            transparent
        );
        opacity: 0;
        transition: .35s;
    }

    .story-counter-card:hover {
        transform: translateY(-10px);
        border-color: rgba(255,255,255,0.18);
    }

    .story-counter-card:hover::before {
        opacity: 1;
    }

    .story-counter-card h2 {
        font-size: 42px;
        font-weight: 900;
        color: #fff;
        margin-bottom: 5px;
        line-height: 1;
    }

    .story-counter-card p {
        margin: 0;
        color: rgba(255, 255, 255, 0.72);
        font-size: 16px;
        letter-spacing: .3px;
    }

    /* Responsive */
    @media(max-width: 991px) {

        .our-story-section {
            padding: 90px 0;
        }

        .story-title {
            font-size: 54px;
        }

        .story-short-desc {
            font-size: 17px;
        }
    }

    @media(max-width: 768px) {

        .story-title {
            font-size: 42px;
            letter-spacing: -1px;
        }

        .story-subtitle {
            font-size: 20px;
        }

        .story-short-desc {
            font-size: 15px;
            line-height: 1.8;
        }

        .story-counter-card {
            padding: 30px 15px;
        }

        .story-counter-card h2 {
            font-size: 40px;
        }
    }

    @media(max-width: 500px) {

        .our-story-section {
            padding: 70px 0;
        }

        .story-title {
            font-size: 34px;
        }

        .story-subtitle {
            font-size: 17px;
        }

        .story-tag {
            font-size: 11px;
            padding: 8px 14px;
        }

        .story-counter-card h2 {
            font-size: 34px;
        }

        .story-counter-card p {
            font-size: 14px;
        }
    }
</style>