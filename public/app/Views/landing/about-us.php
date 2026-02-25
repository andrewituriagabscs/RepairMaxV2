<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="About Repairmax - Learn about our mission to revolutionize device repair.">
    <title>About Us | Repairmax</title>

    <link rel="icon" type="image/x-icon" href="../../../assets/img/repairlogocircle.png">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="../../../assets/js/tailwind-config.js"></script>

    <style type="text/tailwindcss">
        @import url('../../../assets/css/landing.css');
    </style>

    <script src="../../../assets/js/landing.js" defer></script>
</head>

<body class="font-sans antialiased text-gray-800 bg-gray-100">

    <?php include '../partials/header.php'; ?>

    <main class="pt-32 lg:pt-40 pb-16 md:pb-24">

        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-16 md:mb-24 fade-in-element">
            <div class="text-center max-w-3xl mx-auto">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-gray-900 mb-6 tracking-tight">
                    Redefining Device Repair
                </h1>
                <p class="text-lg md:text-xl text-gray-600 leading-relaxed">
                    We started Repairmax because we were tired of the standard repair shop experience. Long waits, hidden fees, and zero transparency shouldn't be the norm when your digital life is on the line.
                </p>
            </div>
        </section>

        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-20 md:mb-28">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center fade-in-element">
                <div class="bg-gray-300 rounded-3xl h-80 md:h-[400px] w-full flex items-center justify-center border border-gray-400 shadow-sm relative overflow-hidden">
                    <span class="material-symbols-outlined text-7xl text-gray-500">build_circle</span>
                    <div class="absolute inset-0 bg-gradient-to-tr from-gray-900/20 to-transparent"></div>
                </div>

                <div class="flex flex-col justify-center">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Built on Transparency and Tech</h2>
                    <p class="text-base md:text-lg text-gray-600 mb-5 leading-relaxed">
                        Traditional repair shops operate in a black box. You hand over your expensive device and hope for the best. At Repairmax, we realized that the solution wasn't just hiring better technicians—it was building better technology to manage the process.
                    </p>
                    <p class="text-base md:text-lg text-gray-600 mb-8 leading-relaxed">
                        By integrating AI chatbots for scheduling, live tracking dashboards, and strict quality control protocols, we've created a digital-first ecosystem. Our certified micro-soldering experts focus on fixing your hardware, while our software keeps you informed every step of the way.
                    </p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="flex items-start gap-3">
                            <span class="material-symbols-outlined text-gray-900 mt-0.5">verified_user</span>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-1">Absolute Privacy</h4>
                                <p class="text-sm text-gray-600">Your data remains yours. We never wipe or browse devices without consent.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="material-symbols-outlined text-gray-900 mt-0.5">recycling</span>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-1">E-Waste Conscious</h4>
                                <p class="text-sm text-gray-600">We responsibly recycle all damaged lithium batteries and shattered LCDs.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 fade-in-element">
            <div class="bg-gray-900 rounded-3xl p-8 md:p-12 text-center shadow-xl border border-gray-800">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-100 mb-4">Experience the Difference Today</h2>
                <p class="text-gray-400 mb-8 max-w-2xl mx-auto text-base md:text-lg">
                    Ready to get your device back to factory condition? Let our automated system find the perfect time slot for you.
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