// About section entrance animation
        document.addEventListener("DOMContentLoaded", function() {
            const aboutSection = document.querySelector(".about-section");
            if (!aboutSection) return;

            const observer = new IntersectionObserver(
                (entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            // Trigger animation once
                            const left = document.querySelector(".about-left");
                            const right = document.querySelector(".about-right");
                            const counters = document.querySelectorAll(".counter-item");

                            if (left) left.classList.add("visible");
                            if (right) right.classList.add("visible");

                            counters.forEach((counter) => {
                                counter.classList.add("visible");
                            });

                            // Stop observing after animation
                            observer.unobserve(aboutSection);
                        }
                    });
                }, {
                    threshold: 0.15
                } // trigger when 15% of section is visible
            );

            observer.observe(aboutSection);
        });