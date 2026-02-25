<header id="main-header" class="fixed top-0 w-full z-50 bg-transparent border-none transition-all duration-300">
    <nav aria-label="Main Navigation" class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8 grid grid-cols-12 gap-6 items-center h-20">

        <div class="col-span-8 lg:col-span-3">
            <a href="/public/index.php" id="brand-logo" class="text-2xl md:text-3xl font-extrabold text-white tracking-tight hover:opacity-80 transition-colors duration-300" aria-label="Repairmax Home">
                Repairmax
            </a>
        </div>

        <div class="col-span-4 flex justify-end lg:hidden">
            <button id="mobile-menu-btn" class="p-2 text-white hover:opacity-80 focus:outline-none transition-colors duration-200" aria-label="Toggle navigation menu" aria-expanded="false" aria-controls="primary-menu">
                <span class="material-symbols-outlined text-3xl" aria-hidden="true">menu</span>
            </button>
        </div>

        <div id="primary-menu" class="hidden absolute top-20 left-0 w-full bg-white lg:bg-transparent border-b border-gray-300 lg:border-none shadow-lg lg:shadow-none py-6 flex-col items-center gap-6 lg:static lg:col-span-9 lg:flex lg:flex-row lg:justify-end lg:w-auto lg:py-0 lg:gap-8" role="menubar">

            <a href="/public/app/Views/landing/about-us.php" class="nav-link text-base font-medium text-gray-300 hover:text-white transition-colors duration-200" role="menuitem">
                About Us
            </a>

            <a href="/public/app/Views/landing/services.php" class="nav-link text-base font-medium text-gray-300 hover:text-white transition-colors duration-200" role="menuitem">
                Services
            </a>

            <a href="/public/app/Views/landing/repairs.php" class="nav-link text-base font-medium text-gray-300 hover:text-white transition-colors duration-200" role="menuitem">
                What We Repair
            </a>

            <a href="/public/app/Views/landing/faq.php" class="nav-link text-base font-medium text-gray-300 hover:text-white transition-colors duration-200" role="menuitem">
                FAQ
            </a>

            <a href="/public/app/Views/landing/contact.php" class="nav-link text-base font-medium text-gray-300 hover:text-white transition-colors duration-200" role="menuitem">
                Contact
            </a>

            <a href="/public/app/views/auth/login.php" class="nav-link text-base font-medium text-gray-300 hover:text-white transition-colors duration-200" role="menuitem">
                Login
            </a>

            <a href="/public/app/Views/booking/create-booking.php" id="book-btn" class="px-6 py-2.5 text-sm md:text-base font-bold text-gray-900 bg-white hover:bg-gray-200 rounded-full shadow-md hover:shadow-lg hover:-translate-y-0.5 transition-all duration-300 lg:ml-2" role="menuitem">
                Book Repair
            </a>

        </div>
    </nav>
</header>