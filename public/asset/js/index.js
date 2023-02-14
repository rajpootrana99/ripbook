// SLIDER LOGIC 
gsap.registerPlugin(ScrollTrigger)

gsap.to(".vertical_slide_1",{
    scrollTrigger: {
        trigger:".vertical_slider_container",
        // markers:true,
        toggleActions: "restart pause reverse play",
        scrub:0
    },
    y:"-300px",
    duration:0.5
})


gsap.to(".vertical_slide_2",{
    scrollTrigger: {
        trigger:".vertical_slider_container",
        // markers:true,
        toggleActions: "restart pause reverse play",
        scrub:0
    },
    y:"-200px",
    duration:0.5
})






