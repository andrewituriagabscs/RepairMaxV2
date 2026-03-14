<x-layouts.landing title="Sign In | Repairmax">
    <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8"
        x-data="{ 
            mode: 'login',
            loading: false,
            loginForm: { email: '', password: '' },
            registerForm: { name: '', email: '', password: '', password_confirmation: '' },
            errors: {}
        }">
        
        {{-- Toast Component --}}
        <x-toast />

        {{-- Modal Overlay --}}
        <div class="w-full max-w-md">
            <div class="bg-white rounded-2xl shadow-2xl border border-gray-100 overflow-hidden">
                {{-- Header --}}
                <div class="bg-gradient-to-r from-blue-600 to-blue-700 px-6 sm:px-8 py-8">
                    <h2 class="text-2xl sm:text-3xl font-bold text-white mb-2">
                        <span x-show="mode === 'login'">Welcome Back</span>
                        <span x-show="mode === 'register'">Create Account</span>
                    </h2>
                    <p class="text-blue-100">
                        <span x-show="mode === 'login'">Sign in to your Repairmax account</span>
                        <span x-show="mode === 'register'">Join us today</span>
                    </p>
                </div>

                {{-- Content --}}
                <div class="px-6 sm:px-8 py-8">
                    {{-- Login Form --}}
                    <form x-show="mode === 'login'" @submit.prevent="handleLogin" class="space-y-6">
                        <div>
                            <label for="login-email" class="block text-sm font-semibold text-gray-700 mb-2">
                                Email Address
                            </label>
                            <input type="email" id="login-email" x-model="loginForm.email" required
                                class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition"
                                placeholder="you@example.com">
                            <p x-show="errors.email" class="text-red-600 text-sm mt-1" x-text="errors.email?.[0]"></p>
                        </div>

                        <div>
                            <label for="login-password" class="block text-sm font-semibold text-gray-700 mb-2">
                                Password
                            </label>
                            <input type="password" id="login-password" x-model="loginForm.password" required
                                class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition"
                                placeholder="••••••••">
                            <p x-show="errors.password" class="text-red-600 text-sm mt-1" x-text="errors.password?.[0]"></p>
                        </div>

                        <button type="submit" :disabled="loading"
                            class="w-full bg-blue-600 hover:bg-blue-700 disabled:bg-gray-400 text-white font-semibold py-2.5 px-4 rounded-lg transition duration-200 flex items-center justify-center gap-2">
                            <span x-show="!loading">Sign In</span>
                            <span x-show="loading" class="flex items-center gap-2">
                                <span class="material-symbols-outlined animate-spin">hourglass_top</span>
                                Signing in...
                            </span>
                        </button>

                        <div class="text-center">
                            <p class="text-sm text-gray-600">
                                Don't have an account?
                                <button type="button" @click="mode = 'register'; errors = {}" class="text-blue-600 hover:text-blue-700 font-semibold">
                                    Sign up
                                </button>
                            </p>
                        </div>
                    </form>

                    {{-- Register Form --}}
                    <form x-show="mode === 'register'" @submit.prevent="handleRegister" class="space-y-6">
                        <div>
                            <label for="register-name" class="block text-sm font-semibold text-gray-700 mb-2">
                                Full Name
                            </label>
                            <input type="text" id="register-name" x-model="registerForm.name" required
                                class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition"
                                placeholder="John Doe">
                            <p x-show="errors.name" class="text-red-600 text-sm mt-1" x-text="errors.name?.[0]"></p>
                        </div>

                        <div>
                            <label for="register-email" class="block text-sm font-semibold text-gray-700 mb-2">
                                Email Address
                            </label>
                            <input type="email" id="register-email" x-model="registerForm.email" required
                                class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition"
                                placeholder="you@example.com">
                            <p x-show="errors.email" class="text-red-600 text-sm mt-1" x-text="errors.email?.[0]"></p>
                        </div>

                        <div>
                            <label for="register-password" class="block text-sm font-semibold text-gray-700 mb-2">
                                Password
                            </label>
                            <input type="password" id="register-password" x-model="registerForm.password" required
                                class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition"
                                placeholder="••••••••">
                            <p x-show="errors.password" class="text-red-600 text-sm mt-1" x-text="errors.password?.[0]"></p>
                        </div>

                        <div>
                            <label for="register-password-confirm" class="block text-sm font-semibold text-gray-700 mb-2">
                                Confirm Password
                            </label>
                            <input type="password" id="register-password-confirm" x-model="registerForm.password_confirmation" required
                                class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition"
                                placeholder="••••••••">
                        </div>

                        <button type="submit" :disabled="loading"
                            class="w-full bg-blue-600 hover:bg-blue-700 disabled:bg-gray-400 text-white font-semibold py-2.5 px-4 rounded-lg transition duration-200 flex items-center justify-center gap-2">
                            <span x-show="!loading">Create Account</span>
                            <span x-show="loading" class="flex items-center gap-2">
                                <span class="material-symbols-outlined animate-spin">hourglass_top</span>
                                Creating...
                            </span>
                        </button>

                        <div class="text-center">
                            <p class="text-sm text-gray-600">
                                Already have an account?
                                <button type="button" @click="mode = 'login'; errors = {}" class="text-blue-600 hover:text-blue-700 font-semibold">
                                    Sign in
                                </button>
                            </p>
                        </div>
                    </form>
                </div>
            </div>

            {{-- Back to Home Link --}}
            <div class="text-center mt-6">
                <a href="/" class="text-gray-600 hover:text-gray-900 inline-flex items-center gap-2 transition">
                    <span class="material-symbols-outlined">arrow_back</span>
                    Back to Home
                </a>
            </div>
        </div>
    </div>

    <script>
        function initAuthForms() {
            const state = {
                mode: 'login',
                loading: false,
                loginForm: { email: '', password: '' },
                registerForm: { name: '', email: '', password: '', password_confirmation: '' },
                errors: {}
            };

            return {
                ...state,
                async handleLogin() {
                    this.loading = true;
                    this.errors = {};

                    try {
                        const response = await fetch('/api/login', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content || ''
                            },
                            body: JSON.stringify(this.loginForm)
                        });

                        const data = await response.json();

                        if (data.success) {
                            // Show success toast
                            const toastEl = document.querySelector('[x-data*="toast"]');
                            if (toastEl && toastEl.__x) {
                                toastEl.__x.$data.show(data.message, 'success', 2000);
                            }
                            // Redirect after a short delay
                            setTimeout(() => {
                                window.location.href = data.redirect;
                            }, 1500);
                        } else {
                            // Show error toast
                            const toastEl = document.querySelector('[x-data*="toast"]');
                            if (toastEl && toastEl.__x) {
                                toastEl.__x.$data.show(data.message, 'error');
                            }
                        }
                    } catch (error) {
                        const toastEl = document.querySelector('[x-data*="toast"]');
                        if (toastEl && toastEl.__x) {
                            toastEl.__x.$data.show('An error occurred. Please try again.', 'error');
                        }
                    } finally {
                        this.loading = false;
                    }
                },

                async handleRegister() {
                    this.loading = true;
                    this.errors = {};

                    try {
                        const response = await fetch('/api/register', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content || ''
                            },
                            body: JSON.stringify(this.registerForm)
                        });

                        const data = await response.json();

                        if (data.success) {
                            // Show success toast
                            const toastEl = document.querySelector('[x-data*="toast"]');
                            if (toastEl && toastEl.__x) {
                                toastEl.__x.$data.show(data.message, 'success', 2000);
                            }
                            // Redirect after a short delay
                            setTimeout(() => {
                                window.location.href = data.redirect;
                            }, 1500);
                        } else if (response.status === 422) {
                            // Validation errors
                            this.errors = data.errors || {};
                            const toastEl = document.querySelector('[x-data*="toast"]');
                            if (toastEl && toastEl.__x) {
                                toastEl.__x.$data.show('Please check your information and try again.', 'error');
                            }
                        }
                    } catch (error) {
                        const toastEl = document.querySelector('[x-data*="toast"]');
                        if (toastEl && toastEl.__x) {
                            toastEl.__x.$data.show('An error occurred. Please try again.', 'error');
                        }
                    } finally {
                        this.loading = false;
                    }
                }
            };
        }
    </script>
</x-layouts.landing>
