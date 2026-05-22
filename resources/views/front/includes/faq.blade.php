<section class="faq-section">

    <div class="container">

        <!-- Header -->
        <div class="text-center faq-header">

            <span class="faq-tag">FAQ</span>

            <h1 class="faq-title">
                Frequently Asked <span>Questions</span>
            </h1>

            <p class="faq-desc">
                Find answers to the most common questions about our services, process, and support.
            </p>

        </div>

        <!-- FAQ Accordion -->
        <div class="accordion faq-accordion" id="faqAccordion">

            <!-- ITEM 1 -->
            <div class="accordion-item faq-item">

                <h2 class="accordion-header">

                    <button class="accordion-button"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faq1">

                        What services does Surkhet Soft provide?

                    </button>

                </h2>

                <div id="faq1"
                    class="accordion-collapse collapse show"
                    data-bs-parent="#faqAccordion">

                    <div class="accordion-body">
                        We provide web development, mobile apps, UI/UX design, branding,
                        digital marketing, AI automation, and business growth solutions.
                    </div>

                </div>

            </div>

            <!-- ITEM 2 -->
            <div class="accordion-item faq-item">

                <h2 class="accordion-header">

                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faq2">

                        How long does a project take?

                    </button>

                </h2>

                <div id="faq2"
                    class="accordion-collapse collapse"
                    data-bs-parent="#faqAccordion">

                    <div class="accordion-body">
                        Project timelines depend on complexity. A basic website takes 1–2 weeks,
                        while larger systems may take several months.
                    </div>

                </div>

            </div>

            <!-- ITEM 3 -->
            <div class="accordion-item faq-item">

                <h2 class="accordion-header">

                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faq3">

                        Do you provide support after project delivery?

                    </button>

                </h2>

                <div id="faq3"
                    class="accordion-collapse collapse"
                    data-bs-parent="#faqAccordion">

                    <div class="accordion-body">
                        Yes, we provide full technical support, maintenance, and updates after project delivery.
                    </div>

                </div>

            </div>

            <!-- ITEM 4 -->
            <div class="accordion-item faq-item">

                <h2 class="accordion-header">

                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faq4">

                        Can you build custom software solutions?

                    </button>

                </h2>

                <div id="faq4"
                    class="accordion-collapse collapse"
                    data-bs-parent="#faqAccordion">

                    <div class="accordion-body">
                        Yes, we specialize in custom software, SaaS platforms, ERP systems,
                        and fully tailored business solutions.
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<style>
    .faq-section {
    padding: 120px 0;
    background: #f2f2f2;
    margin-bottom: -100px
}

/* Header */
.faq-header {
    max-width: 750px;
    margin: auto;
    margin-bottom: 60px;
}

.faq-tag {
    display: inline-block;
    padding: 8px 16px;
    border-radius: 50px;
    background: rgba(120,158,195,0.12);
    color: #789EC3;
    font-weight: 700;
    font-size: 13px;
    letter-spacing: 2px;
}

.faq-title {
    font-size: 52px;
    font-weight: 900;
    margin: 20px 0;
    color: #111;
}

.faq-title span {
    color: #789EC3;
}

.faq-desc {
    color: #555;
    font-size: 17px;
    line-height: 1.8;
}

/* Accordion */
.faq-accordion {
    max-width: 900px;
    margin: auto;
}

/* Item */
.faq-item {
    border: none;
    margin-bottom: 15px;
    border-radius: 18px;
    overflow: hidden;
    box-shadow: 0 10px 25px rgba(0,0,0,0.05);
}

/* Button */
.faq-accordion .accordion-button {
    background: #fff;
    padding: 18px 20px;
    font-weight: 700;
    color: #111;
    box-shadow: none;
}

.faq-accordion .accordion-button:not(.collapsed) {
    background: #789EC3;
    color: #fff;
}

.faq-accordion .accordion-button:focus {
    box-shadow: none;
}

/* Body */
.faq-accordion .accordion-body {
    background: #fff;
    color: #555;
    line-height: 1.8;
    padding: 18px 20px;
}

/* Responsive */
@media(max-width: 768px) {

    .faq-title {
        font-size: 36px;
    }

    .faq-section {
        padding: 80px 0;
    }
}
</style>