<section class="brand-project" id="brandPortfolio">

    <div class="container pb-5">

        <!-- HEADER -->
        <div class="row text-center mb-5">
            <small class="mx-auto d-block tag-line">
                DESIGN CAPABILITIES
            </small>

            <h2 class="section-title1">
                Our Diversified <span>Design</span> Portfolio
            </h2>

            <!-- FILTER BUTTONS -->
            <div class="d-flex justify-content-center gap-2 flex-wrap mt-3">

                <a href="javascript:void(0)" class="btn border py-1 selectCategory selectCategoryActive" data-id="all">
                    <small>All</small>
                </a>

                @foreach ($brandCategories as $item)
                    <a href="javascript:void(0)" class="btn border py-1 selectCategory" data-id="{{ $item->id }}">
                        <small>{{ $item->title }}</small>
                    </a>
                @endforeach

            </div>
        </div>

        <!-- PORTFOLIO GRID -->
        <div class="row px-2 px-md-5">

            @foreach ($brandPortfolios as $brandPortfolio)
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item"
                    data-category="{{ $brandPortfolio->brand_category_id }}">

                    <div class="brand-project-card">

                        <div class="img-wrapper">
                            <img src="/storage/{{ $brandPortfolio->image }}" class="brand-image">
                        </div>

                        <div class="p-3">
                            <h4>{{ $brandPortfolio->name }}</h4>
                            <p>{{ $brandPortfolio->description }}</p>
                            <small>{{ $brandPortfolio->category->name }}</small>
                        </div>

                    </div>

                </div>
            @endforeach

        </div>

    </div>

</section>

<style>
    /* TAG */
    .tag-line {
        color: #789ec3;
        background: #789ec320;
        width: 200px;
        border-radius: 50px;
        font-size: 14px;
        padding: 6px 10px;
    }

    /* TITLE */
    .section-title1 span {
        color: #789ec3;
    }

    /* FILTER BUTTON */
    .selectCategory {
        background: #f1f1f1;
        transition: 0.3s;
        border-radius: 6px;
    }

    .selectCategoryActive {
        background: #789ec3 !important;
        color: #fff !important;
    }

    /* CARD */
    .brand-project-card {
        border-radius: 12px;
        overflow: hidden;
        background: #fff;
        box-shadow: 0 5px 20px rgba(120, 158, 195, 0.25);
        transition: all 0.4s ease;
    }

    /* HOVER EFFECT */
    .brand-project-card:hover {
        transform: translateY(-12px) scale(1.02);
        box-shadow: 0 25px 45px rgba(120, 158, 195, 0.35);
    }

    /* IMAGE */
    .img-wrapper {
        overflow: hidden;
    }

    .brand-image {
        width: 100%;
        height: 230px;
        object-fit: cover;
        transition: transform 0.6s ease;
    }

    .brand-project-card:hover .brand-image {
        transform: scale(1.15);
    }

    /* TEXT HOVER */
    .brand-project-card h4 {
        transition: 0.3s;
    }

    .brand-project-card:hover h4 {
        color: #789ec3;
        transform: translateX(5px);
    }

    /* GRID ANIMATION HELP */
    .portfolio-item {
        will-change: transform, opacity;
    }
</style>
@push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {

            const buttons = document.querySelectorAll(".selectCategory");
            const items = document.querySelectorAll(".portfolio-item");

            function animateIn(filteredItems) {
                gsap.fromTo(filteredItems, {
                    opacity: 0,
                    y: 30,
                    scale: 0.95
                }, {
                    opacity: 1,
                    y: 0,
                    scale: 1,
                    duration: 0.5,
                    stagger: 0.08,
                    ease: "power3.out"
                });
            }

            function filter(category) {

                let filtered = [];

                items.forEach(item => {

                    const itemCat = item.getAttribute("data-category");

                    if (category === "all" || category == itemCat) {
                        item.style.display = "block";
                        filtered.push(item);
                    } else {
                        item.style.display = "none";
                    }

                });

                animateIn(filtered);
            }

            buttons.forEach(btn => {
                btn.addEventListener("click", function() {

                    // active button
                    buttons.forEach(b => b.classList.remove("selectCategoryActive"));
                    this.classList.add("selectCategoryActive");

                    const category = this.getAttribute("data-id");

                    // exit animation first
                    gsap.to(items, {
                        opacity: 0,
                        y: 20,
                        scale: 0.98,
                        duration: 0.2,
                        stagger: 0.03,
                        onComplete: () => {
                            filter(category);
                        }
                    });

                });
            });

            // default load
            if (buttons.length) {
                buttons[0].click();
            }

        });
    </script>
@endpush
