document.addEventListener('DOMContentLoaded', function() {
            const testimonialCards = document.querySelectorAll('.testimonial-card');

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('show');
                        observer.unobserve(entry.target); // animate only once
                    }
                });
            }, {
                threshold: 0.2 // trigger when 20% of card is visible
            });

            testimonialCards.forEach((card, i) => {
                observer.observe(card);
                card.style.transitionDelay = `${i * 0.15}s`; // 0.15s between cards
            });
        });