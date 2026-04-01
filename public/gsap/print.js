

// =============================================
var tl = gsap.timeline({
    scrollTrigger: {
        trigger: ".brand-sub-content",
        start: "top 60%",
        end: "top 40%",
        // duration:5,
        scrub: 1,
        markers: false,
    },
});

tl.to(".card1", {
    top: "100.2%",
    left: "16%",
    height: "40px",
    width: "135px",
    duration: 1,
    zIndex: 9999,
    borderRadius: 2,
    backgroundColor: "#ccc",
});
tl.to(".card3", {
   top: "100.2%",
    left: "27%",
    height: "40px",
    width: "90px",
    duration: 5,
    zIndex: 9999,
    borderRadius: 5,
    backgroundColor: "#ccc",
});
tl.to(".card4", {
   top: "100.2%",
    left: "35%",
    height: "40px",
    width: "90px",
    duration: 5,
    zIndex: 9999,
    borderRadius: 5,
    backgroundColor: "#ccc",
});

tl.to(".card5", {
    top: "100.2%",
    left: "43%",
    height: "40px",
    width: "125px",
    duration: 5,
    zIndex: 9999,
    borderRadius: 5,
    backgroundColor: "#ccc",
});
tl.to(".card6", {
    top: "100.2%",
    left: "53.5%",
    height: "40px",
    width: "155px",
    duration: 5,
    zIndex: 9999,
    borderRadius: 5,
    backgroundColor: "#ccc",
});
tl.to(".card7", {
    top: "100.2%",
    left: "65.5%",
    height: "40px",
    width: "130px",
    duration: 5,
    zIndex: 9999,
    borderRadius: 5,
    backgroundColor: "#ccc",
});
tl.to(".card8", {
    top: "100.2%",
    left: "76%",
    height: "40px",
    width: "105px",
    duration: 5,
    zIndex: 9999,
    borderRadius: 5,
    backgroundColor: "#ccc",
});
tl.to(".card9", {
   top: "100.2%",
    left: "85%",
    height: "40px",
    width: "110px",
    duration: 5,
    zIndex: 9999,
    borderRadius: 5,
    backgroundColor: "#ccc",
});


// =============================================
gsap.from(".brand-sub-content", {
    y: -200,
    duration: 1,
});
gsap.to(".prand-project-lists", {
    transform: "translateX(-55%)",
    scrollTrigger: {
        trigger: ".brand-project",
        scroller: "body",
        markers: false,
        start: "top 0%",
        end: "top -150%",
        scrub: 1,
        pin: true,
    },
});
