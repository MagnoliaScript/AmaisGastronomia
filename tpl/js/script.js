document.addEventListener("DOMContentLoaded", function () {

    // 🔹 Efeito de scroll no header (adiciona classe quando passa de 50px)
    window.addEventListener('scroll', function () {
        const header = document.querySelector('.navbar-custom');
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });

    // 🔹 Swiper principal (banner)
    var swiper = new Swiper(".bannerSwiper", {
        loop: true, // loop infinito
        autoplay: {
            delay: 3000, // troca automática (3s)
            disableOnInteraction: false, // continua mesmo ao interagir
            pauseOnMouseEnter: true, // pausa no hover
        },
        speed: 800, // velocidade da transição
        slidesPerView: 1,
        spaceBetween: 10,
        effect: "slide", // opções: slide, fade, cube, coverflow, flip
        fadeEffect: { crossFade: true },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        keyboard: { enabled: true, onlyInViewport: true },
        breakpoints: {
            576: { slidesPerView: 1 },
            768: { slidesPerView: 1 },
            1024: { slidesPerView: 1 },
        },
        coverflowEffect: {
            rotate: 30,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
        },
        scrollbar: { el: ".swiper-scrollbar", hide: true },
    });
});

document.addEventListener("DOMContentLoaded", function () {
    // 🔹 Swiper das avaliações
    new Swiper(".ratingsSwiper", {
        loop: true,
        autoplay: { delay: 5000, disableOnInteraction: false },
        slidesPerView: 1,
        breakpoints: {
            768: { slidesPerView: 1 },
            992: { slidesPerView: 4 },
        },
        spaceBetween: 20,
        pagination: { el: ".ratingsSwiper .swiper-pagination", clickable: true },
        navigation: { nextEl: ".ratingsSwiper .swiper-button-next", prevEl: ".ratingsSwiper .swiper-button-prev" }
    });

    // 🔹 Swiper dos parceiros
    new Swiper('.partnersSwiper', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        autoplay: { delay: 5000, disableOnInteraction: false },
        navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
        breakpoints: {
            768: { slidesPerView: 2 },
            992: { slidesPerView: 4 },
        }
    });
});

// 🔹 Inicialização geral das outras funções
document.addEventListener('DOMContentLoaded', function () {

    // 🔹 Lightbox da galeria (fsLightbox)
    fsLightboxInstances['gallery'].props.loadOnlyCurrentSource = true;

    // 🔹 Ativa animação dos counters quando a seção stats aparecer
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounters();
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    const statsSection = document.querySelector('.stats-row');
    if (statsSection) {
        observer.observe(statsSection);
    }

    // 🔹 Validação do formulário (Bootstrap)
    (function () {
        'use strict';
        const form = document.getElementById('contactForm');
        form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    })();

    // 🔹 Smooth scrolling para links âncora
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 80,
                    behavior: 'smooth'
                });
            }
        });
    });
});

// 🔹 Efeito de fade-in nos elementos ao rolar a página
document.addEventListener('DOMContentLoaded', function () {
    const elementos = document.querySelectorAll('.fade-in');

    function checarScroll() {
        elementos.forEach(elemento => {
            const elementoTop = elemento.getBoundingClientRect().top;
            const elementoHeight = elemento.offsetHeight;
            const windowHeight = window.innerHeight;
            const pontoAtivacao = windowHeight - (elementoHeight / 3);
            if (elementoTop < pontoAtivacao) {
                elemento.classList.add('visible');
            }
        });
    }

    // Otimiza scroll com debounce
    let isScrolling;
    window.addEventListener('scroll', function () {
        window.clearTimeout(isScrolling);
        isScrolling = setTimeout(checarScroll, 50);
    }, false);

    checarScroll(); // executa ao carregar
});

document.addEventListener('DOMContentLoaded', function () {

    // 🔹 Animação dos counters (números subindo)
    const counters = document.querySelectorAll('.counter');
    const speed = 1000; // quanto maior, mais devagar
    let animated = false;

    function animateCounters() {
        counters.forEach(counter => {
            const target = +counter.getAttribute('data-target');
            let count = 0;
            const increment = target / speed;
            function updateCounter() {
                if (count < target) {
                    count += increment;
                    counter.innerText = Math.ceil(count);
                    requestAnimationFrame(updateCounter);
                } else {
                    counter.innerText = target;
                }
            }
            updateCounter();
        });
    }

    // Ativa counters ao entrar na seção #about-us
    const section = document.querySelector('#about-us');
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !animated) {
                animateCounters();
                animated = true;
            }
        });
    }, { threshold: 0.3 });
    observer.observe(section);

    // 🔹 Fade-in otimizado via JS
    const elementos = document.querySelectorAll('.fade-in');
    let jaAtivados = new Set();

    // Esconde inicialmente
    elementos.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(20px)';
        el.classList.remove('fade-in');
        el.classList.add('fade-in-js');
    });

    // CSS injetado para transição
    const estiloTransicao = `
        .fade-in-js {
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
            will-change: opacity, transform;
        }
    `;
    const style = document.createElement('style');
    style.textContent = estiloTransicao;
    document.head.appendChild(style);

    // Função de checagem
    function checarScroll() {
        elementos.forEach(el => {
            if (jaAtivados.has(el)) return;
            const rect = el.getBoundingClientRect();
            const triggerPoint = window.innerHeight * 0.8;
            if (rect.top < triggerPoint) {
                el.style.opacity = '1';
                el.style.transform = 'translateY(0)';
                jaAtivados.add(el);
            }
        });
    }

    // Scroll otimizado com throttle
    let estaAnimando = false;
    window.addEventListener('scroll', function () {
        if (!estaAnimando) {
            requestAnimationFrame(() => {
                checarScroll();
                estaAnimando = false;
            });
            estaAnimando = true;
        }
    });

    // IntersectionObserver para fade-in
    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !jaAtivados.has(entry.target)) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                    jaAtivados.add(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.2,
            rootMargin: '0px 0px -20% 0px'
        });
        elementos.forEach(el => observer.observe(el));
    } else {
        // Fallback para navegadores antigos
        setTimeout(checarScroll, 300);
        checarScroll();
    }
});
