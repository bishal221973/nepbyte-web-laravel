<div class="team-poster">

    <div class="overlay"></div>

    <!-- top content -->
    <div class="hero-content">
        <h1>CREATIVE</h1>
        <h2>TEAM</h2>

        <p>
            "Lorem ipsum dolor Lorem thesi ipsum<br>
            Lorem ipsum dolor amet conse tetuer<br>
            adipiscing."
        </p>
    </div>

     @if(isset($teams[0]))
        <div class="member top-member">
            <div class="member-cntainer">

                @if(!empty($teams[0]->image))
                    <img src="{{ asset($teams[0]->image) }}" alt="team">
                @else
                    <div class="name-container">
                        {{ getName($teams[0]->name) }}
                    </div>
                @endif

            </div>

            <h4>{{ $teams[0]->name }}</h4>
            <small>{{ $teams[0]->position }}</small>
        </div>
    @endif

    <!-- decorative layers -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#789EC3" fill-opacity="1" d="M0,64L20,96C40,128,80,192,120,181.3C160,171,200,85,240,58.7C280,32,320,64,360,96C400,128,440,160,480,165.3C520,171,560,149,600,160C640,171,680,213,720,245.3C760,277,800,299,840,282.7C880,267,920,213,960,192C1000,171,1040,181,1080,208C1120,235,1160,277,1200,261.3C1240,245,1280,171,1320,160C1360,149,1400,203,1420,229.3L1440,256L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z"></path></svg>
    <div class="diagonal-strip">
        
    </div>
    {{-- <div class="cyan-line"></div> --}}

    {{-- TOP FEATURE MEMBER --}}
    {{-- @if(isset($teams[0]))
        <div class="member top-member">
            <div class="member-cntainer">

                @if(!empty($teams[0]->image))
                    <img src="{{ asset($teams[0]->image) }}" alt="team">
                @else
                    <div class="name-container">
                        {{ getName($teams[0]->name) }}
                    </div>
                @endif

            </div>

            <h4>{{ $teams[0]->name }}</h4>
            <small>{{ $teams[0]->position }}</small>
        </div>
    @endif --}}


    {{-- TEAM GRID --}}
    <div class="members-row" style="position: relative;top:630px">
        @foreach ($teams as $index => $team)

            @if($index === 0)
                @continue
            @endif

            <div class="member">
                <div class="member-cntainer">

                    @if(!empty($team->image))
                        <img src="{{ asset($team->image) }}" alt="team">
                    @else
                        <div class="name-container">
                            {{ getName($team->name) }}
                        </div>
                    @endif

                </div>

                <h4>{{ $team->name }}</h4>
                <small>{{ $team->position }}</small>
            </div>

        @endforeach
    </div>

</div>

<style>
    body {
    margin: 0;
    background: #111;
    font-family: Arial, sans-serif;
    overflow-x: hidden;
    background: rgba(120, 158, 195, 1);
}

/* fallback name box */
.name-container {
    height: 150px;
    width: 150px;
    background-color: #fff;
    color: #24496d;
    font-weight: bold;
    display: flex;
    justify-content: center;
    align-items: center;
    border-top-left-radius: 20px;
    border-bottom-right-radius: 20px;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
}

/* main container */
/* .team-poster {
    width: 100vw;
    height: 1100px;
    position: relative;
    overflow: hidden;
    background: url('team.jpg') center/cover no-repeat;
    background-attachment: fixed;
} */
 .team-poster {
    width: 100%;
    min-height: 100vh;
    position: relative;
    background: url('team.jpg') center/cover no-repeat;
    background-attachment: fixed;
}

/* overlay */
.overlay {
    position: absolute;
    inset: 0;
    background: rgba(255, 255, 255, 0.82);
}

/* heading */
.hero-content {
    position: absolute;
    top: 180px;
    left: 90px;
    z-index: 5;
}

.hero-content h1,
.hero-content h2 {
    margin: 0;
    font-size: 72px;
    font-weight: 900;
    line-height: 0.9;
}

.hero-content h1 {
    color: #24496d;
}

.hero-content h2 {
    color: #42d9c8;
}

.hero-content p {
    margin-top: 25px;
    color: #666;
    font-size: 22px;
    line-height: 1.7;
}

/* diagonal background */
.diagonal-strip {
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 100%;
    background: rgba(120, 158, 195, 1);
    /* clip-path: polygon(0 32%, 100% 0, 100% 100%, 0 100%); */
    z-index: 2;
    top: 80%
}

/* cyan line */


/* member cards */
.member {
    position: absolute;
    text-align: center;
    z-index: 6;
    color: white;
    width: 160px;
}

.member img {
    width: 120px;
    height: 120px;
    object-fit: cover;
    background: #fff;
    padding: 8px;
}

.member h4 {
    margin: 14px 0 4px;
    font-size: 18px;
}

.member small {
    font-size: 13px;
    color: #f2f2f2;
}

/* featured member */
.top-member {
    top: 150px;
    right: 90px;
}

/* image frame decoration */
.member-cntainer {
    position: relative;
}

.member-cntainer::after,
.member-cntainer::before {
    content: "";
    position: absolute;
    height: 100px;
    width: 100px;
    z-index: 999;
}

.member-cntainer::after {
    left: -3px;
    bottom: -7px;
    border-left: 3px solid #24496d;
    border-bottom: 3px solid #24496d;
}

.member-cntainer::before {
    right: -3px;
    top: -7px;
    border-right: 3px solid #24496d;
    border-top: 3px solid #24496d;
}

/* bottom row */
.members-row {
    position: relative;
    bottom: 90px;
    left: 80px;
    display: flex;
    gap: 70px;
    flex-wrap: wrap;
    z-index: 6;
}

.members-row .member {
    position: relative;
}
svg{
    position: absolute;
    bottom: 18%;
}
</style>