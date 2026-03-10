 document.addEventListener('DOMContentLoaded', function() {
            const doctorCards = document.querySelectorAll('.doctor-card');

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('show');
                        observer.unobserve(entry.target); // Animate only once
                    }
                });
            }, {
                threshold: 0.2 // Trigger when 20% of card is visible
            });

            doctorCards.forEach((card, i) => {
                observer.observe(card);
                card.style.transitionDelay = `${i * 0.15}s`; // stagger animation
            });
        });