document.addEventListener("DOMContentLoaded", function () {
    // --- 1. HEADER LOGIC ---
    const header = document.getElementById("main-header");
    const logo = document.getElementById("brand-logo");
    const mobileBtn = document.getElementById("mobile-menu-btn");
    const navLinks = document.querySelectorAll(".nav-link");
    const bookBtn = document.getElementById("book-btn");
    const mobileMenu = document.getElementById("primary-menu");

    // SMART DETECTION: Check if we are on the Home Page by looking for the video hero section
    const isHomePage = document.getElementById("intro") !== null;
    let isMobileMenuOpen = false;

    // Mobile Menu Toggle
    if (mobileBtn) {
        mobileBtn.addEventListener("click", function () {
            isMobileMenuOpen = !isMobileMenuOpen;
            if (isMobileMenuOpen) {
                if (mobileMenu) {
                    mobileMenu.classList.remove("hidden");
                    mobileMenu.classList.add("flex");
                }
            } else {
                if (mobileMenu) {
                    mobileMenu.classList.add("hidden");
                    mobileMenu.classList.remove("flex");
                }
            }
            updateHeaderState();
        });
    }

    function updateHeaderState() {
        if (!header) return; // Failsafe if header is missing

        // CONDITION: Scrolled Down OR Not on Home Page OR Mobile Menu is Open
        // RESULT: Solid White Header
        if (!isHomePage || window.scrollY > 50 || isMobileMenuOpen) {
            header.classList.remove("bg-transparent", "border-none");
            header.classList.add("bg-white", "shadow-md", "border-b", "border-gray-200");

            if (logo) logo.classList.replace("text-white", "text-gray-900");
            if (mobileBtn) mobileBtn.classList.replace("text-white", "text-gray-900");

            navLinks.forEach(link => {
                link.classList.remove("text-gray-300", "hover:text-white");
                link.classList.add("text-gray-600", "hover:text-gray-900");
            });

            if (bookBtn) {
                bookBtn.classList.remove("bg-white", "text-gray-900", "hover:bg-gray-200");
                bookBtn.classList.add("bg-gray-900", "text-white", "hover:bg-gray-700");
            }

        } else {
            // CONDITION: At the top of the Home Page
            // RESULT: Transparent Header
            header.classList.remove("bg-white", "shadow-md", "border-b", "border-gray-200", "border-gray-300");
            header.classList.add("bg-transparent", "border-none");

            if (logo) logo.classList.replace("text-gray-900", "text-white");
            if (mobileBtn) mobileBtn.classList.replace("text-gray-900", "text-white");

            navLinks.forEach(link => {
                link.classList.remove("text-gray-600", "hover:text-gray-900");
                link.classList.add("text-gray-300", "hover:text-white");
            });

            if (bookBtn) {
                bookBtn.classList.remove("bg-gray-900", "text-white", "hover:bg-gray-700");
                bookBtn.classList.add("bg-white", "text-gray-900", "hover:bg-gray-200");
            }
        }
    }

    // Run immediately on load
    updateHeaderState();
    // Run on scroll
    window.addEventListener("scroll", updateHeaderState);


    // --- 2. FADE-IN SCROLL EFFECT ---
    // Sets up the observer to watch when elements enter the screen
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.15 // Triggers when 15% of the element is visible
    };

    const scrollObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // When visible, remove invisible states and add visible states
                entry.target.classList.remove("opacity-0", "translate-y-10");
                entry.target.classList.add("opacity-100", "translate-y-0");

                // Stop observing once it has animated in
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Find all elements you want to animate and apply initial hidden Tailwind classes
    const fadeElements = document.querySelectorAll(".fade-in-element");
    fadeElements.forEach(el => {
        // Start them invisible and slightly pushed down
        el.classList.add("opacity-0", "translate-y-10", "transition-all", "duration-700", "ease-out");
        scrollObserver.observe(el);
    });
});