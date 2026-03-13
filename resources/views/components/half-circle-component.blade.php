<div style="background-color:#000; height:80vh; display:flex; justify-content:center; align-items:flex-end;z-index:-1">
  <div class="circle2">
    <div class="circle1">
      <!-- <div class="circle3">
        Hello
      </div> -->
    </div>
  </div>
</div>

<style>
/* Outer Semi-circle */
.circle2 {
    height: 400px;
    width: 800px;
    background: linear-gradient(180deg, #2E2857, #000);
    position: relative;
    border-top-left-radius: 400px;
    border-top-right-radius: 400px;
    display: flex;
    justify-content: center;
    align-items: flex-end;
}

/* Middle Semi-circle */
.circle1 {
    height: 300px;
    width: 600px;
    background: linear-gradient(180deg, #2E2857, #000);
    position: relative;
    border-top-left-radius: 300px;
    border-top-right-radius: 300px;
    display: flex;
    justify-content: center;
    align-items: flex-end;
    margin-bottom: -50px; /* slightly overlap outer circle */
}

/* Inner Glowing Semi-circle */
.circle3 {
    height: 150px;
    width: 150px;
    background-color: #383361;
    border-top-left-radius: 75px;
    border-top-right-radius: 75px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
    font-weight: bold;

    /* Neon glow effect */
    box-shadow:
        0 0 10px #383361,
        0 0 20px #383361,
        0 0 30px #383361,
        0 0 40px #383361,
        0 0 50px #383361;

    animation: neonPulse 2s infinite alternate;
}

/* Glow animation */
@keyframes neonPulse {
    0% {
        box-shadow:
            0 0 5px #383361,
            0 0 10px #383361,
            0 0 15px #383361,
            0 0 20px #383361,
            0 0 25px #383361;
    }
    100% {
        box-shadow:
            0 0 15px #383361,
            0 0 25px #383361,
            0 0 35px #383361,
            0 0 45px #383361,
            0 0 55px #383361;
    }
}
</style>