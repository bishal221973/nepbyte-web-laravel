<div class="modern-section">

    <div class="container">
        <small class="mx-auto d-block tag-line">Work Better. Together.</small>
        <h2 class="section-title1 text-center">Building Stronger <span>Teams</span> Through Transparent <br> <span>Collaboration</span> and <span>Modern Digital Tools</span></h2>
        <div class="row g-4 mt-5">

            <!-- CARD 01 -->
            <div class="col-lg-6">
                <div class="modern-card">

                    <span class="badge-modern">System Control / 01</span>

                    <h2 class="title-modern">
                        Smart Control System
                    </h2>

                    <p class="desc-modern">
                        Manage and optimize your entire workflow with intelligent automation and real-time monitoring systems.
                    </p>

                    <div class="features-modern">
                        <div>Real-time system monitoring</div>
                        <div>Automated process control</div>
                        <div>Advanced analytics dashboard</div>
                    </div>

                    <button class="btn-modern">Learn More</button>

                </div>
            </div>

            <!-- CARD 02 -->
            <div class="col-lg-6">
                <div class="modern-card">

                    <span class="badge-modern">Production Line / 02</span>

                    <h2 class="title-modern">
                        Production Optimization
                    </h2>

                    <p class="desc-modern">
                        Streamline manufacturing with scalable, automated production systems designed for maximum efficiency.
                    </p>

                    <div class="features-modern">
                        <div>Automated production workflow</div>
                        <div>Quality control integration</div>
                        <div>Scalable manufacturing system</div>
                    </div>

                    <button class="btn-modern">Learn More</button>

                </div>
            </div>

        </div>

    </div>

</div>

<style>
    .tag-line {
    color: #789ec3;
    background: #789ec320;
    width: 200px;
    border-radius: 50px;
    font-size: 14px;
    padding: 6px 10px;
    display: block;
    text-align: center;
}
.section-title1 span {
    color: #789ec3;
}
    .modern-section{
    padding: 100px 0;
    background: #ffffff;
}

/* CARD */
.modern-card{
    background: #ffffff;
    border: 1px solid rgba(120,158,195,0.2);
    border-radius: 22px;
    padding: 40px;
    height: 100%;
    box-shadow: 0 15px 40px rgba(0,0,0,0.05);
    transition: .4s;
    position: relative;
    overflow: hidden;
}

.modern-card::before{
    content:"";
    position:absolute;
    top:-50px;
    right:-50px;
    width:140px;
    height:140px;
    background: rgba(120,158,195,0.1);
    border-radius:50%;
}

.modern-card:hover{
    transform: translateY(-8px);
    box-shadow: 0 20px 60px rgba(120,158,195,0.15);
}

/* BADGE */
.badge-modern{
    display:inline-block;
    background: rgba(120,158,195,0.12);
    color:#789EC3;
    padding:7px 16px;
    border-radius:50px;
    font-size:13px;
    font-weight:600;
    margin-bottom:15px;
}

/* TITLE */
.title-modern{
    font-size:34px;
    font-weight:800;
    color:#1d3557;
    margin-bottom:15px;
    line-height:1.2;
}

/* DESCRIPTION */
.desc-modern{
    font-size:15px;
    color:#6c757d;
    line-height:1.7;
}

/* FEATURES */
.features-modern{
    margin-top:20px;
}

.features-modern div{
    margin-bottom:10px;
    font-size:14px;
    color:#333;
    position:relative;
    padding-left:22px;
}

.features-modern div::before{
    content:"✓";
    position:absolute;
    left:0;
    color:#789EC3;
    font-weight:bold;
}

/* BUTTON */
.btn-modern{
    margin-top:25px;
    background:#789EC3;
    color:#fff;
    border:none;
    padding:11px 26px;
    border-radius:50px;
    font-weight:600;
    transition:.3s;
}

.btn-modern:hover{
    background:#5e86b0;
    transform: translateY(-3px);
}

/* RESPONSIVE */
@media(max-width:991px){
    .modern-card{
        padding: 30px;
    }

    .title-modern{
        font-size:26px;
    }
}
</style>