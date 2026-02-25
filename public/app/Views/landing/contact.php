<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contact Andoy Cellphone Repair Service - Visit our flagship store at the junction of Fairview, Payatas, and Commonwealth.">
    <title>Contact Us | Andoy Cellphone Repair Service</title>

    <link rel="icon" type="image/x-icon" href="../../../assets/img/repairlogocircle.png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="../../../assets/js/tailwind-config.js"></script>

    <style type="text/tailwindcss">
        @import url('../../../assets/css/landing.css');
    </style>
</head>

<body class="font-sans antialiased text-gray-800 bg-gray-100">

    <?php include '../partials/header.php'; ?>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const header = document.getElementById("main-header");
            const logo = document.getElementById("brand-logo");
            const mobileBtn = document.getElementById("mobile-menu-btn");
            const navLinks = document.querySelectorAll(".nav-link");
            const bookBtn = document.getElementById("book-btn");

            if (header) {
                header.classList.remove("bg-transparent", "border-none");
                header.classList.add("bg-white", "shadow-md", "border-b", "border-gray-200");
            }
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
        });
    </script>

    <main class="pt-32 lg:pt-40 pb-16 md:pb-24">

        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-4 tracking-tight">
                    Get in Touch
                </h1>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Visit our flagship branch or send us an enquiry online. Our expert technicians are ready to help.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16">

                <div class="space-y-8">
                    <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-200">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6 italic">Andoy Cellphone Repair Service</h2>

                        <div class="space-y-6">
                            <div class="flex items-start gap-4">
                                <span class="material-symbols-outlined text-gray-900 mt-1">location_on</span>
                                <div>
                                    <p class="font-bold text-gray-900">Flagship Branch</p>
                                    <p class="text-gray-600 leading-relaxed">
                                        Commonwealth Ave. Cor. IBP Road (Litex Junction),<br>
                                        Brgy. Payatas, Quezon City, 1119<br>
                                        Metro Manila, Philippines
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-center gap-4">
                                <span class="material-symbols-outlined text-gray-900">call</span>
                                <div>
                                    <p class="font-bold text-gray-900">Contact Number</p>
                                    <p class="text-gray-600">+63 912 345 6789</p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8 rounded-2xl overflow-hidden h-64 border border-gray-300">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.123456789!2d121.095!3d14.698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397ba0000000001%3A0x0000000000000000!2sCommonwealth%20Ave%20%26%20IBP%20Rd%2C%20Quezon%20City!5e0!3m2!1sen!2sph!4v1700000000000"
                                width="100%"
                                height="100%"
                                style="border:0;"
                                allowfullscreen=""
                                loading="lazy">
                            </iframe>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-200">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Enquire Us</h2>
                    <form action="process_enquiry.php" method="POST" class="space-y-5">

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">To</label>
                                <input type="text" value="Andoy Repair Support" disabled
                                    class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl text-gray-500 cursor-not-allowed">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">From (Your Email)</label>
                                <input type="email" name="from_email" placeholder="juan@example.com" required
                                    class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-gray-900 focus:border-transparent outline-none transition-all">
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
                            <input type="text" name="subject" placeholder="e.g., Samsung LCD Replacement Quote" required
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-gray-900 focus:border-transparent outline-none transition-all">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                            <textarea name="message" rows="5" placeholder="Tell us about your device issue..." required
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-gray-900 focus:border-transparent outline-none transition-all resize-none"></textarea>
                        </div>

                        <button type="submit" class="w-full py-4 bg-gray-900 text-white font-bold rounded-xl hover:bg-gray-800 transition-all flex items-center justify-center gap-2 shadow-lg hover:-translate-y-0.5 active:translate-y-0">
                            <span class="material-symbols-outlined">send</span>
                            Send Enquiry
                        </button>

                    </form>
                </div>

            </div>
        </section>

        <section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 mt-20 md:mt-28 fade-in-element">
            <div class="bg-gray-900 rounded-3xl p-8 md:p-12 text-center shadow-xl border border-gray-800">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-100 mb-4">No Wait. No Hassle</h2>
                <p class="text-gray-400 mb-8 max-w-2xl mx-auto text-base md:text-lg">
                    We believe in total transparency from the first click. Choose your preferred time slot now and experience a smarter way to handle device repair.
                </p>
                <a href="/app/views/booking/create-booking.php" class="inline-flex items-center justify-center px-8 py-3.5 text-base md:text-lg font-bold text-gray-900 bg-gray-100 hover:bg-gray-300 rounded-full transition-all duration-300 shadow-lg hover:-translate-y-1">
                    <span class="material-symbols-outlined mr-2">calendar_month</span>
                    Book an Appointment
                </a>
            </div>
        </section>

    </main>

    <?php include '../partials/footer.php'; ?>
    <?php include '../partials/float-chatbot.php'; ?>
    <script src="../../../assets/js/float-chatbot.js" defer></script>
</body>

</html>