const loader = document.getElementById("loader");
const content = document.getElementById("content");

content.style.display = "none";

setTimeout(() => {
    loader.style.display = "none";
    content.style.display = "block";

    gsap.from("#content", { opacity: 0, duration: 1.5, ease: "power2.out"});

    gsap.from("nav", { opacity: 0, y: -50, duration: 1, ease: "power2.out", delay: 0.5 });
    gsap.from(".hero-section", { opacity: 0, y: 50, duration: 1, ease: "power2.out", delay: 0.8 });
    gsap.from(".hero-content h1", { opacity: 0, duration: 1, ease: "power2.out", delay: 1 });
    gsap.from(".hero-content p", { opacity: 0, duration: 1, ease: "power2.out", delay: 1.2 });
    gsap.from(".hero-content a", { opacity: 0, duration: 1, ease: "power2.out", delay: 1.4 });
    gsap.from(".hero-image img", { opacity: 0, scale: 0.95, duration: 1.5, ease: "power2.out", delay: 1.6 });
}, 3000);