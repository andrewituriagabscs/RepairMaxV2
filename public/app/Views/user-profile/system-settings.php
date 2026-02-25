<?php
// System Settings Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System Settings | User</title>
    
    <link rel="icon" type="image/x-icon" href="../../../assets/img/repairlogocircle.png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    
    <style>
        body { font-family: 'Roboto', sans-serif; }
        
        main {
            margin-left: 0;
            padding-top: 80px;
            transition: margin-left 0.3s ease;
        }

        header {
            left: 0;
            transition: left 0.3s ease;
        }
        
        @media (min-width: 1024px) {
            main {
                margin-left: 256px;
            }
            
            header {
                left: 256px;
            }
            
            main.sidebar-hidden {
                margin-left: 0;
            }
            
            header.sidebar-hidden {
                left: 0;
            }
        }
    </style>
</head>
<body class="font-sans antialiased bg-gray-50">
    <?php include '../partials/sidebar-user.php'; ?>
    
    <main class="transition-all duration-300">
        <div class="max-w-4xl mx-auto px-4 md:px-6 lg:px-8 py-8">
            <div class="mb-8">
                <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2 flex items-center gap-2">
                    <span class="material-symbols-outlined">settings</span>
                    System Settings
                </h1>
                <p class="text-gray-600">Manage your account preferences and security.</p>
            </div>
            
            <div class="space-y-6">
                <!-- Notifications -->
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">
                    <h3 class="font-semibold text-gray-900 mb-4 flex items-center gap-2">
                        <span class="material-symbols-outlined">notifications_active</span>
                        Notifications
                    </h3>
                    <div class="space-y-4">
                        <label class="flex items-center cursor-pointer hover:bg-gray-50 p-2 rounded -mx-2">
                            <input type="checkbox" checked class="rounded">
                            <span class="ml-3 text-sm text-gray-600">Email notifications for appointments</span>
                        </label>
                        <label class="flex items-center cursor-pointer hover:bg-gray-50 p-2 rounded -mx-2">
                            <input type="checkbox" checked class="rounded">
                            <span class="ml-3 text-sm text-gray-600">SMS notifications</span>
                        </label>
                        <label class="flex items-center cursor-pointer hover:bg-gray-50 p-2 rounded -mx-2">
                            <input type="checkbox" class="rounded">
                            <span class="ml-3 text-sm text-gray-600">Marketing emails</span>
                        </label>
                        <label class="flex items-center cursor-pointer hover:bg-gray-50 p-2 rounded -mx-2">
                            <input type="checkbox" checked class="rounded">
                            <span class="ml-3 text-sm text-gray-600">Appointment reminders</span>
                        </label>
                    </div>
                </div>
                
                <!-- Security -->
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">
                    <h3 class="font-semibold text-gray-900 mb-4 flex items-center gap-2">
                        <span class="material-symbols-outlined">security</span>
                        Security
                    </h3>
                    <div class="space-y-3">
                        <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors text-sm font-medium">
                            Change Password
                        </button>
                        <div class="pt-3 border-t">
                            <p class="text-sm text-gray-600 mb-2">Two-Factor Authentication</p>
                            <button class="text-sm text-blue-600 hover:text-blue-700 font-medium">Enable 2FA</button>
                        </div>
                        <div class="pt-3 border-t">
                            <p class="text-sm text-gray-600 mb-2">Last Login</p>
                            <p class="text-sm font-medium text-gray-900">February 26, 2026 at 10:30 AM from Chrome on Windows</p>
                        </div>
                    </div>
                </div>
                
                <!-- Privacy -->
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">
                    <h3 class="font-semibold text-gray-900 mb-4 flex items-center gap-2">
                        <span class="material-symbols-outlined">privacy_tip</span>
                        Privacy
                    </h3>
                    <div class="space-y-4">
                        <label class="flex items-center cursor-pointer hover:bg-gray-50 p-2 rounded -mx-2">
                            <input type="checkbox" checked class="rounded">
                            <span class="ml-3 text-sm text-gray-600">Allow sharing of repair history</span>
                        </label>
                        <label class="flex items-center cursor-pointer hover:bg-gray-50 p-2 rounded -mx-2">
                            <input type="checkbox" class="rounded">
                            <span class="ml-3 text-sm text-gray-600">Allow data collection for service improvement</span>
                        </label>
                    </div>
                </div>
                
                <!-- Account -->
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">
                    <h3 class="font-semibold text-gray-900 mb-4 flex items-center gap-2">
                        <span class="material-symbols-outlined">account_circle</span>
                        Account
                    </h3>
                    <div class="space-y-3">
                        <button class="text-sm text-blue-600 hover:text-blue-700 font-medium">Edit Profile Information</button>
                        <div class="pt-3 border-t">
                            <button class="text-sm text-red-600 hover:text-red-700 font-medium">Delete Account</button>
                            <p class="text-xs text-gray-500 mt-1">This action cannot be undone</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
