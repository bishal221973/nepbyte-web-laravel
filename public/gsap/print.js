        gsap.from(".card1", {
                y: 200,
                scale: 3,
                opacity: 0,
                duration: 1,
            })
            gsap.from(".card2", {
                y: 200,
                scale: 3,
                opacity: 0,
                duration: 1,
            })
            gsap.from(".card3", {
                y: 200,
                scale: 3,
                opacity: 0,
                duration: 1,
            })
            gsap.from(".card4", {
                y: 200,
                scale: 3,
                opacity: 0,
                duration: 1,
            })
            gsap.from(".card5", {
                y: 200,
                scale: 3,
                opacity: 0,
                duration: 1,
            })
            gsap.from(".card6", {
                y: 200,
                scale: 3,
                opacity: 0,
                duration: 1,
            })
            gsap.from(".card7", {
                y: 200,
                scale: 3,
                opacity: 0,
                duration: 1,
            })
            gsap.from(".card8", {
                y: 200,
                scale: 3,
                opacity: 0,
                duration: 1,
            })
            gsap.from(".card9", {
                y: 200,
                scale: 3,
                opacity: 0,
                duration: 1,
            })
            gsap.from(".card10", {
                y: 200,
                scale: 3,
                opacity: 0,
                duration: 1,
            })
        gsap.from(".ai-title", {
                x: -300,
                opacity: 0,
                duration: 1
            }),
            gsap.from(".ai-subtitle", {
                x: -200,
                opacity: 0,
                duration: 1,
                delay: 0.5
            })
        gsap.from(".btn-brand-left", {
            scale: 0,
            opacity: 0,
            duration: 1,
            delay: 1
        })
        gsap.from(".btn-brand-right", {
            x: 300,
            opacity: 0,
            duration: 1,
            delay: 1
        })

        // =============================================
        var tl = gsap.timeline({
            scrollTrigger: {
                trigger: ".brand-sub-content",
                start: "top 70%",
                end: "top 0%",
                // duration:5,
                scrub: 1,
                markers: true,
            }
        })

        tl.to(".card1", {
            top: "135%",
            left: "40%",
            height: "20vw",
            width: "20vw",
            duration: 5,
            zindex:9999,
            overwrite: "auto"
        })

        // =============================================
        gsap.from(".brand-sub-content", {
            y: -200,
            duration: 1
        })
        gsap.to(".prand-project-lists", {
            transform: "translateX(-55%)",
            scrollTrigger: {
                trigger: ".brand-project",
                scroller: "body",
                markers: false,
                start: "top 0%",
                end: "top -150%",
                scrub: 1,
                pin: true
            }
        })