<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Book your device repair with Repairmax.">
    <title>Book a Repair | Repairmax</title>
    <link rel="icon" type="image/x-icon" href="assets/img/repairlogocircle.png">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="assets/js/tailwind-config.js"></script>

    <style type="text/tailwindcss">
        @import url('assets/css/landing.css');
    </style>
</head>

<body class="font-sans antialiased text-gray-800 bg-gray-50 min-h-screen flex flex-col">

    <main class="flex-grow pt-8 pb-16 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto w-full">

        <a href="/public/index.php" class="inline-flex items-center text-gray-500 hover:text-gray-900 transition-colors duration-300 text-sm font-bold mb-8 md:mb-12">
            <span class="material-symbols-outlined text-xl mr-2">arrow_back</span>
            Back to Home
        </a>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-20">

            <div class="lg:col-span-4">
                <div class="sticky top-12">
                    <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-6 tracking-tight leading-tight">Tell us about your device.</h1>
                    <p class="text-base md:text-lg text-gray-600 mb-8 leading-relaxed">
                        Skip the line and let us know exactly what is going on. Fill out your details, and our technicians will be ready for you the moment you arrive.
                    </p>
                    <div class="hidden lg:block border-t border-gray-200 pt-8 mt-8">
                        <div class="flex items-center gap-4 mb-4">
                            <span class="material-symbols-outlined text-gray-400 text-3xl">lock</span>
                            <p class="text-sm text-gray-500">Your data is processed securely and never shared with third parties.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-8">
                <form action="process-booking.php" method="POST" enctype="multipart/form-data" class="space-y-12">

                    <div>
                        <h2 class="text-xl font-bold text-gray-900 mb-6 flex items-center gap-2">
                            <span class="material-symbols-outlined text-gray-400">person</span>
                            Personal Details
                        </h2>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="firstName" class="block text-sm font-medium text-gray-700 mb-2">First Name *</label>
                                <input type="text" id="firstName" name="firstName" required class="w-full px-4 py-3 bg-white border border-gray-300 rounded-xl focus:ring-2 focus:ring-gray-900 focus:border-transparent outline-none transition-all duration-200" placeholder="John">
                            </div>
                            <div>
                                <label for="lastName" class="block text-sm font-medium text-gray-700 mb-2">Last Name *</label>
                                <input type="text" id="lastName" name="lastName" required class="w-full px-4 py-3 bg-white border border-gray-300 rounded-xl focus:ring-2 focus:ring-gray-900 focus:border-transparent outline-none transition-all duration-200" placeholder="Doe">
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address *</label>
                                <input type="email" id="email" name="email" required class="w-full px-4 py-3 bg-white border border-gray-300 rounded-xl focus:ring-2 focus:ring-gray-900 focus:border-transparent outline-none transition-all duration-200" placeholder="john@example.com">
                            </div>
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number *</label>
                                <input type="tel" id="phone" name="phone" required class="w-full px-4 py-3 bg-white border border-gray-300 rounded-xl focus:ring-2 focus:ring-gray-900 focus:border-transparent outline-none transition-all duration-200" placeholder="(555) 123-4567">
                            </div>
                            <div class="md:col-span-2">
                                <label for="address" class="block text-sm font-medium text-gray-700 mb-2">Complete Address</label>
                                <textarea id="address" name="address" rows="2" class="w-full px-4 py-3 bg-white border border-gray-300 rounded-xl focus:ring-2 focus:ring-gray-900 focus:border-transparent outline-none transition-all duration-200 resize-none" placeholder="123 Main St, Apt 4B, City, State, ZIP"></textarea>
                            </div>
                        </div>
                    </div>

                    <hr class="border-gray-200">

                    <div>
                        <h2 class="text-xl font-bold text-gray-900 mb-6 flex items-center gap-2">
                            <span class="material-symbols-outlined text-gray-400">devices</span>
                            Device Information
                        </h2>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="deviceType" class="block text-sm font-medium text-gray-700 mb-2">Device Type *</label>
                                <select id="deviceType" name="deviceType" required class="w-full px-4 py-3 bg-white border border-gray-300 rounded-xl focus:ring-2 focus:ring-gray-900 focus:border-transparent outline-none transition-all duration-200 cursor-pointer text-gray-700">
                                    <option value="" disabled selected>Select type</option>
                                    <option value="smartphone">Smartphone</option>
                                    <option value="tablet">Tablet</option>
                                    <option value="laptop">Laptop/MacBook</option>
                                    <option value="smartwatch">Smartwatch</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div>
                                <label for="deviceBrand" class="block text-sm font-medium text-gray-700 mb-2">Brand *</label>
                                <input type="text" id="deviceBrand" name="deviceBrand" required class="w-full px-4 py-3 bg-white border border-gray-300 rounded-xl focus:ring-2 focus:ring-gray-900 focus:border-transparent outline-none transition-all duration-200" placeholder="e.g., Apple, Samsung">
                            </div>
                            <div class="md:col-span-2">
                                <label for="deviceModel" class="block text-sm font-medium text-gray-700 mb-2">Model</label>
                                <input type="text" id="deviceModel" name="deviceModel" class="w-full px-4 py-3 bg-white border border-gray-300 rounded-xl focus:ring-2 focus:ring-gray-900 focus:border-transparent outline-none transition-all duration-200" placeholder="e.g., iPhone 13 Pro">
                            </div>
                        </div>
                    </div>

                    <hr class="border-gray-200">

                    <div>
                        <h2 class="text-xl font-bold text-gray-900 mb-6 flex items-center gap-2">
                            <span class="material-symbols-outlined text-gray-400">build</span>
                            Repair Details
                        </h2>

                        <div class="grid grid-cols-1 gap-6">
                            <div>
                                <label for="issueDescription" class="block text-sm font-medium text-gray-700 mb-2">Describe the Issue *</label>
                                <textarea id="issueDescription" name="issueDescription" required rows="5" class="w-full px-4 py-3 bg-white border border-gray-300 rounded-xl focus:ring-2 focus:ring-gray-900 focus:border-transparent outline-none transition-all duration-200 resize-none" placeholder="Please describe what happened and the symptoms you are experiencing."></textarea>
                            </div>

                            <div>
                                <label for="devicePhoto" class="block text-sm font-medium text-gray-700 mb-2">Upload a Photo of the Damage (Optional)</label>
                                <label for="devicePhoto" class="flex flex-col items-center justify-center w-full h-32 border-2 border-gray-300 border-dashed rounded-xl cursor-pointer bg-white hover:bg-gray-50 hover:border-gray-500 transition-all duration-300">
                                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                        <span class="material-symbols-outlined text-gray-400 mb-2 text-3xl">cloud_upload</span>
                                        <p class="mb-2 text-sm text-gray-500"><span class="font-semibold text-gray-700">Click to upload</span> or drag and drop</p>
                                        <p class="text-xs text-gray-400">PNG, JPG or JPEG (MAX. 5MB)</p>
                                    </div>
                                    <input id="devicePhoto" name="devicePhoto" type="file" accept="image/png, image/jpeg, image/jpg" class="hidden" />
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="pt-6">
                        <button type="submit" class="inline-flex items-center justify-center px-8 py-4 text-base md:text-lg font-bold text-white bg-gray-900 hover:bg-gray-800 rounded-xl shadow-lg hover:-translate-y-1 transition-all duration-300 w-full sm:w-auto">
                            Submit Booking Request
                            <span class="material-symbols-outlined ml-2">arrow_forward</span>
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </main>

    <?php include '../app/Views/partials/footer.php'; ?>

</body>

</html>