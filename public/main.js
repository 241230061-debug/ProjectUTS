function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            const isOpen = menu.classList.contains('translate-y-0');

            if (isOpen) {
                menu.classList.remove('translate-y-0', 'opacity-100');
                menu.classList.add('translate-y-[-100%]', 'opacity-0');
            } else {
                menu.classList.remove('translate-y-[-100%]', 'opacity-0');
                menu.classList.add('translate-y-0', 'opacity-100');
            }
        }

        // Counter Animation
        function animateCounters() {
            const counters = document.querySelectorAll('[data-target]');
            const speed = 200;

            counters.forEach(counter => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText.replace(/,/g, '');
                const increment = target / speed;

                if (count < target) {
                    counter.innerText = Math.ceil(count + increment).toLocaleString();
                    setTimeout(() => animateCounters(), 1);
                } else {
                    counter.innerText = target.toLocaleString();
                }
            });
        }

        // Form submission handler
        function handleSubmit(e) {
            e.preventDefault();
            const toast = document.getElementById('toast');

            // Show Toast
            toast.classList.remove('translate-y-[150%]', 'opacity-0');
            toast.classList.add('translate-y-0', 'opacity-100');

            // Hide after 4 seconds
            setTimeout(() => {
                toast.classList.remove('translate-y-0', 'opacity-100');
                toast.classList.add('translate-y-[150%]', 'opacity-0');
            }, 4000);

            e.target.reset();
        }

        // Intersection Observer for scroll animations
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';

                    // Trigger counter animation when impact section is visible
                    if (entry.target.id === 'dampak') {
                        setTimeout(() => animateCounters(), 500);
                    }
                }
            });
        }, { threshold: 0.1 });

        // Observe elements for animations
        document.querySelectorAll('.program-card, .timeline-item, .artikel-card, .impact-card').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(20px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(el);
        });

        // Smooth scroll for anchor links
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

        // Initialize animations on page load
        document.addEventListener('DOMContentLoaded', function() {
            // Add loading animation to body
            document.body.classList.add('animate-fade-in');

            // Trigger hero stats animation after a delay
            setTimeout(() => {
                const heroCounters = document.querySelectorAll('#beranda [data-target]');
                heroCounters.forEach(counter => {
                    const target = +counter.getAttribute('data-target');
                    let count = 0;
                    const increment = target / 100;

                    const timer = setInterval(() => {
                        count += increment;
                        if (count >= target) {
                            counter.innerText = target.toLocaleString();
                            clearInterval(timer);
                        } else {
                            counter.innerText = Math.floor(count).toLocaleString();
                        }
                    }, 30);
                });
            }, 1000);
        });