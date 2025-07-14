document.addEventListener('DOMContentLoaded', function () {
    let currentSlide = 0;
    const slides = document.querySelectorAll('.hero-slide');
    const dots = document.querySelectorAll('.hero-dot');

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.toggle('active', i === index);
        });
        dots.forEach((dot, i) => {
            dot.classList.toggle('active', i === index);
        });
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }

    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            currentSlide = index;
            showSlide(currentSlide);
        });
    });

    setInterval(nextSlide, 5000);
    showSlide(0);

    // Smooth scrolling
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Parallax scroll
    window.addEventListener('scroll', function () {
        const scrolled = window.pageYOffset;
        const heroSlides = document.querySelectorAll('.hero-slide');
        heroSlides.forEach(slide => {
            slide.style.transform = `translateY(${scrolled * 0.5}px)`;
        });
    });
});
