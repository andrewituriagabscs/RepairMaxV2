<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password | Repairmax</title>

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
                Password recovery.
            </h2>
            <p class="text-gray-500 text-lg max-w-md">
                Don't worry, it happens. Enter the email address associated with your account, and we'll send you a secure link to reset your password.
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
                <h1 class="text-3xl font-bold text-gray-900">Repairmax</h1>
            </div>

            <div class="mb-10 text-center sm:text-left">
                <h2 class="text-2xl font-semibold text-gray-900">Reset your password</h2>
                <p class="text-gray-600 mt-2">Enter your email to receive a reset link.</p>
            </div>

            <form action="#" method="POST" class="space-y-6">
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                    <input type="email" id="email" name="email" required placeholder="name@example.com"
                        class="w-full bg-gray-100 border border-gray-400 text-gray-900 rounded-md px-4 py-3 focus:outline-none focus:border-gray-800 focus:ring-1 focus:ring-gray-800 transition-colors">
                </div>

                <div class="pt-4">
                    <button type="submit" class="w-full bg-gray-900 text-gray-100 hover:bg-gray-800 font-medium rounded-md px-4 py-3 transition-colors shadow-sm">
                        Send Reset Link
                    </button>
                </div>
            </form>

            <div class="mt-8 text-center text-sm text-gray-600 flex items-center justify-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
                <a href="login.php" class="font-semibold text-gray-900 hover:text-gray-700 underline underline-offset-4 transition-colors">
                    Back to log in
                </a>
            </div>

        </div>
    </div>

</body>

</html>