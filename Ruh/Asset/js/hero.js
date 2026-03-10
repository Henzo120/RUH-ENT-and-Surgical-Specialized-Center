         // Scroll behavior (only affects larger screens where top-bar exists)
        let lastScroll = 0;
        const topBar = document.getElementById('topBar');
        const header = document.getElementById('main-header');

        window.addEventListener('scroll', () => {
            const current = window.scrollY;

            if (topBar) { // Only run if top-bar exists (not on small screens)
                if (current > lastScroll && current > 120) {
                    topBar.classList.add('hidden');
                } else {
                    topBar.classList.remove('hidden');
                }
                lastScroll = current <= 0 ? 0 : current;
            }

            if (current > 120) {
                header.classList.remove('transparent');
                header.classList.add('solid');
            } else {
                header.classList.remove('solid');
                header.classList.add('transparent');
            }
        });

        // Hamburger Menu
        const hamburger = document.getElementById('hamburger');
        const mobileMenu = document.getElementById('mobileMenu');
        const closeMenu = document.getElementById('closeMenu');

        hamburger?.addEventListener('click', () => mobileMenu.classList.add('active'));
        closeMenu?.addEventListener('click', () => mobileMenu.classList.remove('active'));
        mobileMenu?.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => mobileMenu.classList.remove('active'));
        });

        // Slideshow
        const slides = document.querySelectorAll('.slide');
        let idx = 0;
        setInterval(() => {
            slides[idx].classList.remove('active');
            idx = (idx + 1) % slides.length;
            slides[idx].classList.add('active');
        }, 4500);

        // Counters
        const counters = document.querySelectorAll('.counter-number');
        counters.forEach(el => {
            const target = +el.getAttribute('data-target');
            let count = 0;
            const increment = target / 180;

            const update = () => {
                if (count < target) {
                    count += increment;
                    el.textContent = Math.ceil(count) + '+';
                    requestAnimationFrame(update);
                } else {
                    el.textContent = target + '+';
                }
            };

            const obs = new IntersectionObserver(([entry]) => {
                if (entry.isIntersecting) update();
            }, {
                threshold: 0.5
            });
            obs.observe(el);
        });
   