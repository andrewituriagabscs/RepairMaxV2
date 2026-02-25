<?php
// System Settings Page (Admin)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System Settings | Admin</title>
    
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
                    <span class="material-symbols-outlined">settings</span>
                    System Settings
                </h1>
                <p class="text-gray-600">Manage system-wide configurations.</p>
            </div>
            
            <div class="space-y-6">
                <!-- System Health -->
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">
                    <h3 class="font-semibold text-gray-900 mb-4 flex items-center gap-2">
                        <span class="material-symbols-outlined">favorite</span>
                        System Health
                    </h3>
                    <div class="space-y-3">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-900">Database Connection</p>
                                <p class="text-xs text-gray-500">Last checked: 2 minutes ago</p>
                            </div>
                            <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-xs font-medium">Connected</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-900">Server Status</p>
                                <p class="text-xs text-gray-500">Response time: 45ms</p>
                            </div>
                            <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-xs font-medium">Healthy</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-900">Storage Usage</p>
                                <p class="text-xs text-gray-500">42.5 GB / 100 GB used</p>
                            </div>
                            <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-xs font-medium">Good</span>
                        </div>
                    </div>
                </div>
                
                <!-- Email Configuration -->
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">
                    <h3 class="font-semibold text-gray-900 mb-4 flex items-center gap-2">
                        <span class="material-symbols-outlined">mail_settings</span>
                        Email Configuration
                    </h3>
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">SMTP Server</label>
                            <input type="text" value="smtp.gmail.com" class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">SMTP Port</label>
                            <input type="number" value="587" class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">From Email Address</label>
                            <input type="email" value="noreply@repairmax.com" class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm">
                        </div>
                        <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors text-sm font-medium">
                            Test Email Configuration
                        </button>
                    </div>
                </div>
                
                <!-- Backup & Data -->
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">
                    <h3 class="font-semibold text-gray-900 mb-4 flex items-center gap-2">
                        <span class="material-symbols-outlined">backup</span>
                        Backup & Data
                    </h3>
                    <div class="space-y-3">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-900">Last Automatic Backup</p>
                                <p class="text-xs text-gray-500">February 26, 2026 at 3:00 AM</p>
                            </div>
                            <button class="text-blue-600 hover:text-blue-700 text-sm font-medium">View</button>
                        </div>
                        <button class="w-full px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors text-sm font-medium">
                            <span class="material-symbols-outlined inline mr-1" style="font-size: 18px;">cloud_download</span>
                            Create Backup Now
                        </button>
                        <button class="w-full px-4 py-2 border border-gray-200 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors text-sm font-medium">
                            <span class="material-symbols-outlined inline mr-1" style="font-size: 18px;">download</span>
                            Export Database
                        </button>
                    </div>
                </div>
                
                <!-- Maintenance Mode -->
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">
                    <h3 class="font-semibold text-gray-900 mb-4 flex items-center gap-2">
                        <span class="material-symbols-outlined">construction</span>
                        Maintenance Mode
                    </h3>
                    <div class="space-y-4">
                        <label class="flex items-center cursor-pointer hover:bg-gray-50 p-2 rounded -mx-2">
                            <input type="checkbox" class="rounded">
                            <span class="ml-3 text-sm text-gray-600">Enable maintenance mode (users will see a maintenance message)</span>
                        </label>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Maintenance Message</label>
                            <textarea rows="3" class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm" placeholder="Our system is currently undergoing maintenance..."></textarea>
                        </div>
                        <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors text-sm font-medium">
                            Save Maintenance Settings
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
