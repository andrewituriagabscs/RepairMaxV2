<?php
// Settings Page (Admin)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings | Admin</title>
    
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
    <?php include '../partials/sidebar-admin.php'; ?>
    
    <main class="transition-all duration-300">
        <div class="max-w-4xl mx-auto px-4 md:px-6 lg:px-8 py-8">
            <div class="mb-8">
                <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2 flex items-center gap-2">
                    <span class="material-symbols-outlined">tune</span>
                    Settings
                </h1>
                <p class="text-gray-600">Manage system settings and preferences.</p>
            </div>
            
            <div class="space-y-6">
                <!-- General Settings -->
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">
                    <h3 class="font-semibold text-gray-900 mb-4 flex items-center gap-2">
                        <span class="material-symbols-outlined">business</span>
                        General Settings
                    </h3>
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Business Name</label>
                            <input type="text" value="RepairMax" class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Business Email</label>
                            <input type="email" value="support@repairmax.com" class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                            <input type="tel" value="(555) 123-4567" class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm">
                        </div>
                        <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors text-sm font-medium">
                            Save Changes
                        </button>
                    </div>
                </div>
                
                <!-- Appointment Settings -->
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">
                    <h3 class="font-semibold text-gray-900 mb-4 flex items-center gap-2">
                        <span class="material-symbols-outlined">calendar_today</span>
                        Appointment Settings
                    </h3>
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Appointment Duration (minutes)</label>
                            <input type="number" value="60" class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Working Hours (Daily)</label>
                            <div class="flex gap-2">
                                <input type="time" value="09:00" class="flex-1 border border-gray-200 rounded-lg px-3 py-2 text-sm">
                                <span class="text-gray-500 text-sm py-2">to</span>
                                <input type="time" value="18:00" class="flex-1 border border-gray-200 rounded-lg px-3 py-2 text-sm">
                            </div>
                        </div>
                        <div>
                            <label class="flex items-center cursor-pointer hover:bg-gray-50 p-2 rounded -mx-2">
                                <input type="checkbox" checked class="rounded">
                                <span class="ml-3 text-sm text-gray-600">Allow weekend appointments</span>
                            </label>
                        </div>
                        <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors text-sm font-medium">
                            Save Changes
                        </button>
                    </div>
                </div>
                
                <!-- Billing Settings -->
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">
                    <h3 class="font-semibold text-gray-900 mb-4 flex items-center gap-2">
                        <span class="material-symbols-outlined">attach_money</span>
                        Billing Settings
                    </h3>
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Currency</label>
                            <select class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm">
                                <option selected>USD ($)</option>
                                <option>EUR (€)</option>
                                <option>GBP (£)</option>
                                <option>CAD (C$)</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Tax Rate (%)</label>
                            <input type="number" value="8.5" step="0.01" class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm">
                        </div>
                        <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors text-sm font-medium">
                            Save Changes
                        </button>
                    </div>
                </div>
                
                <!-- Security Settings -->
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">
                    <h3 class="font-semibold text-gray-900 mb-4 flex items-center gap-2">
                        <span class="material-symbols-outlined">security</span>
                        Security Settings
                    </h3>
                    <div class="space-y-3">
                        <label class="flex items-center cursor-pointer hover:bg-gray-50 p-2 rounded -mx-2">
                            <input type="checkbox" checked class="rounded">
                            <span class="ml-3 text-sm text-gray-600">Require two-factor authentication for all users</span>
                        </label>
                        <label class="flex items-center cursor-pointer hover:bg-gray-50 p-2 rounded -mx-2">
                            <input type="checkbox" class="rounded">
                            <span class="ml-3 text-sm text-gray-600">Force password reset every 90 days</span>
                        </label>
                        <label class="flex items-center cursor-pointer hover:bg-gray-50 p-2 rounded -mx-2">
                            <input type="checkbox" checked class="rounded">
                            <span class="ml-3 text-sm text-gray-600">Enable audit logging</span>
                        </label>
                        <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors text-sm font-medium mt-3">
                            Save Changes
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
