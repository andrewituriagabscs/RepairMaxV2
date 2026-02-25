<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Repairmax</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>

    <script src="assets/js/tailwind-config.js"></script>
</head>

<body class="min-h-screen grid grid-cols-12 bg-gray-100 text-gray-900 font-sans antialiased">

    <div class="hidden lg:flex lg:col-span-5 bg-gray-900 text-gray-100 p-12 flex-col justify-between">
        <div>
            <h1 class="text-4xl font-bold tracking-tight">Repairmax</h1>
        </div>
        <div>
            <h2 class="text-3xl font-medium leading-tight mb-4 text-gray-200">
                Welcome back.
            </h2>
            <p class="text-gray-500 text-lg max-w-md">
                Log in to check your repair status, view service tickets, and manage your appointments.
            </p>
        </div>
        <div class="text-sm text-gray-600">
            &copy; 2026 Repairmax All rights reserved.
        </div>
    </div>

    <div class="col-span-12 lg:col-span-7 flex flex-col justify-center p-8 sm:p-12 lg:p-20 relative">

        <div class="absolute top-6 left-6 sm:top-10 sm:left-12 lg:top-12 lg:left-20">
            <a href="/public/index.php" class="inline-flex items-center gap-2 text-sm font-medium text-gray-600 hover:text-gray-900 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
                Back to Home
            </a>
        </div>

        <div class="w-full max-w-md mx-auto mt-12 lg:mt-0">

            <div class="lg:hidden mb-8 text-center sm:text-left">
                <h1 class="text-3xl font-bold text-gray-900">Repairmax.</h1>
            </div>

            <div class="mb-10 text-center sm:text-left">
                <h2 class="text-2xl font-semibold text-gray-900">Log in to your account</h2>
                <p class="text-gray-600 mt-2">Welcome back! Please enter your details.</p>
            </div>

            <form action="#" method="POST" class="space-y-6">
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                    <input type="email" id="email" name="email" required
                        class="w-full bg-gray-100 border border-gray-400 text-gray-900 rounded-md px-4 py-3 focus:outline-none focus:border-gray-800 focus:ring-1 focus:ring-gray-800 transition-colors">
                </div>

                <div class="relative">
                    <div class="flex items-center justify-between mb-2">
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <a href="forgot-password.php" class="text-sm font-medium text-gray-900 hover:text-gray-700 underline underline-offset-4 transition-colors">Forgot password?</a>
                    </div>
                    <div class="relative">
                        <input type="password" id="password" name="password" required
                            class="w-full bg-gray-100 border border-gray-400 text-gray-900 rounded-md px-4 py-3 pr-12 focus:outline-none focus:border-gray-800 focus:ring-1 focus:ring-gray-800 transition-colors">
                        <button type="button" onclick="togglePassword('password', 'eyeIcon')" class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-500 hover:text-gray-700">
                            <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="pt-4">
                    <button type="submit" class="w-full bg-gray-900 text-gray-100 hover:bg-gray-800 font-medium rounded-md px-4 py-3 transition-colors shadow-sm">
                        Sign In
                    </button>
                </div>
            </form>

            <div class="mt-8 text-center text-sm text-gray-600">
                Don't have an account?
                <a href="registration.php" class="font-semibold text-gray-900 hover:text-gray-700 underline underline-offset-4 transition-colors">
                    Register here
                </a>
            </div>

        </div>
    </div>

    <script>
        function togglePassword(inputId, iconId) {
            const input = document.getElementById(inputId);
            const icon = document.getElementById(iconId);

            if (input.type === 'password') {
                input.type = 'text';
                // Switch to "Eye Slash" icon
                icon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />`;
            } else {
                input.type = 'password';
                // Switch back to "Eye Open" icon
                icon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />`;
            }
        }
    </script>
</body>

</html>