gsap.to(".bubble", {
    y: 20,
    duration: 2,
    repeat: -1,
    yoyo: true,
    ease: "sine.inOut",
    stagger: 0.2,
});
gsap.from(".card1", {
    y: 200,
    scale: 3,
    opacity: 0,
    duration: 1,
});
gsap.from(".card2", {
    y: 200,
    scale: 3,
    opacity: 0,
    duration: 1,
});
gsap.from(".card3", {
    y: 200,
    scale: 3,
    opacity: 0,
    duration: 1,
});
gsap.from(".card4", {
    y: 200,
    scale: 3,
    opacity: 0,
    duration: 1,
});
gsap.from(".card5", {
    y: 200,
    scale: 3,
    opacity: 0,
    duration: 1,
});
gsap.from(".card6", {
    y: 200,
    scale: 3,
    opacity: 0,
    duration: 1,
});
gsap.from(".card7", {
    y: 200,
    scale: 3,
    opacity: 0,
    duration: 1,
});
gsap.from(".card8", {
    y: 200,
    scale: 3,
    opacity: 0,
    duration: 1,
});
gsap.from(".card9", {
    y: 200,
    scale: 3,
    opacity: 0,
    duration: 1,
});
gsap.from(".card10", {
    y: 200,
    scale: 3,
    opacity: 0,
    duration: 1,
});
(gsap.from(".ai-title", {
    x: -300,
    opacity: 0,
    duration: 1,
}),
    gsap.from(".ai-subtitle", {
        x: -200,
        opacity: 0,
        duration: 1,
        delay: 0.5,
    }));
gsap.from(".btn-brand-left", {
    scale: 0,
    opacity: 0,
    duration: 1,
    delay: 1,
});
gsap.from(".btn-brand-right", {
    x: 300,
    opacity: 0,
    duration: 1,
    delay: 1,
});

// =============================================
var tl = gsap.timeline({
    scrollTrigger: {
        trigger: ".brand-sub-content",
        start: "top 70%",
        end: "top 10%",
        // duration:5,
        scrub: 1,
        markers: true,
    },
});

tl.to(".card1", {
    top: "100.2%",
    left: "16%",
    height: "40px",
    width: "135px",
    duration: 5,
    zIndex: 9999,
    borderRadius: 5,
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
