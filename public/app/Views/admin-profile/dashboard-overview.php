<?php
// Dashboard Overview Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Overview | Admin</title>
    
    <link rel="icon" type="image/x-icon" href="../../../assets/img/repairlogocircle.png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    
    <style>
        body { font-family: 'Roboto', sans-serif; }
        main { margin-left: 0; padding-top: 80px; }
        header { left: 0; }
        @media (min-width: 1024px) { main { margin-left: 256px; } }
        @media (min-width: 1024px) { main.sidebar-hidden { margin-left: 0; } }
        @media (min-width: 1024px) { header { left: 256px; } }
        @media (min-width: 1024px) { header.sidebar-hidden { left: 0; } }
    </style>
</head>
<body class="font-sans antialiased bg-gray-50">
    <?php include '../partials/sidebar-admin.php'; ?>
    
    <main class="transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8 py-8">
            <div class="mb-8">
                <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2 flex items-center gap-2">
                    <span class="material-symbols-outlined">dashboard</span>
                    System Overview
                </h1>
                <p class="text-gray-600">Real-time system performance metrics and key indicators.</p>
            </div>
            
            <!-- Key Metrics -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-600 mb-1">System Uptime</p>
                            <p class="text-3xl font-bold text-gray-900">99.8%</p>
                            <p class="text-xs text-green-600 mt-1">✓ Excellent</p>
                        </div>
                        <span class="material-symbols-outlined text-3xl text-green-600" style="font-size: 40px;">cloud_done</span>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-600 mb-1">Active Users</p>
                            <p class="text-3xl font-bold text-gray-900">127</p>
                            <p class="text-xs text-gray-500 mt-1">12 admins, 115 users</p>
                        </div>
                        <span class="material-symbols-outlined text-3xl text-blue-600" style="font-size: 40px;">group</span>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-600 mb-1">Pending Tasks</p>
                            <p class="text-3xl font-bold text-gray-900">8</p>
                            <p class="text-xs text-orange-600 mt-1">⚠ Needs attention</p>
                        </div>
                        <span class="material-symbols-outlined text-3xl text-orange-600" style="font-size: 40px;">assignment</span>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-600 mb-1">Storage Used</p>
                            <p class="text-3xl font-bold text-gray-900">42.5GB</p>
                            <p class="text-xs text-gray-500 mt-1">42.5% of 100GB</p>
                        </div>
                        <span class="material-symbols-outlined text-3xl text-purple-600" style="font-size: 40px;">storage</span>
                    </div>
                </div>
            </div>
            
            <!-- System Alerts -->
            <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6 mb-8">
                <h3 class="font-semibold text-gray-900 mb-4 flex items-center gap-2">
                    <span class="material-symbols-outlined">notifications</span>
                    System Alerts
                </h3>
                <div class="space-y-3">
                    <div class="flex items-start gap-3 p-3 bg-blue-50 border border-blue-200 rounded-lg">
                        <span class="material-symbols-outlined text-blue-600 mt-1">info</span>
                        <div class="flex-1">
                            <p class="font-medium text-gray-900">Database Maintenance Scheduled</p>
                            <p class="text-sm text-gray-600">Scheduled for March 3, 2026 at 2:00 AM</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3 p-3 bg-yellow-50 border border-yellow-200 rounded-lg">
                        <span class="material-symbols-outlined text-yellow-600 mt-1">warning</span>
                        <div class="flex-1">
                            <p class="font-medium text-gray-900">Low Memory Warning</p>
                            <p class="text-sm text-gray-600">Server memory usage at 78% - consider optimization</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Recent Activity -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Recent Appointments -->
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">
                    <h3 class="font-semibold text-gray-900 mb-4 flex items-center gap-2">
                        <span class="material-symbols-outlined">event</span>
                        Today's Appointments
                    </h3>
                    <div class="space-y-3">
                        <div class="flex items-between p-3 hover:bg-gray-50 rounded">
                            <div class="flex-1">
                                <p class="font-medium text-gray-900">Jane Doe - iPhone Screen</p>
                                <p class="text-xs text-gray-500">10:00 AM - John Smith</p>
                            </div>
                            <span class="px-2 py-1 bg-yellow-100 text-yellow-800 rounded text-xs font-medium">In Progress</span>
                        </div>
                        <div class="flex items-between p-3 hover:bg-gray-50 rounded">
                            <div class="flex-1">
                                <p class="font-medium text-gray-900">Mike Johnson - Battery</p>
                                <p class="text-xs text-gray-500">2:00 PM - Sarah Johnson</p>
                            </div>
                            <span class="px-2 py-1 bg-blue-100 text-blue-800 rounded text-xs font-medium">Pending</span>
                        </div>
                        <div class="flex items-between p-3 hover:bg-gray-50 rounded">
                            <div class="flex-1">
                                <p class="font-medium text-gray-900">Emma Wilson - MacBook</p>
                                <p class="text-xs text-gray-500">4:00 PM - Mike Davis</p>
                            </div>
                            <span class="px-2 py-1 bg-blue-100 text-blue-800 rounded text-xs font-medium">Pending</span>
                        </div>
                    </div>
                </div>
                
                <!-- System Status -->
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">
                    <h3 class="font-semibold text-gray-900 mb-4 flex items-center gap-2">
                        <span class="material-symbols-outlined">health_and_safety</span>
                        Service Status
                    </h3>
                    <div class="space-y-3">
                        <div class="flex items-center justify-between p-3 hover:bg-gray-50 rounded">
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-green-600 rounded-full"></span>
                                <p class="font-medium text-gray-900">Web Server</p>
                            </div>
                            <span class="text-xs text-gray-500">Running</span>
                        </div>
                        <div class="flex items-center justify-between p-3 hover:bg-gray-50 rounded">
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-green-600 rounded-full"></span>
                                <p class="font-medium text-gray-900">Database</p>
                            </div>
                            <span class="text-xs text-gray-500">Connected</span>
                        </div>
                        <div class="flex items-center justify-between p-3 hover:bg-gray-50 rounded">
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-green-600 rounded-full"></span>
                                <p class="font-medium text-gray-900">Email Service</p>
                            </div>
                            <span class="text-xs text-gray-500">Operational</span>
                        </div>
                        <div class="flex items-center justify-between p-3 hover:bg-gray-50 rounded">
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-green-600 rounded-full"></span>
                                <p class="font-medium text-gray-900">API Service</p>
                            </div>
                            <span class="text-xs text-gray-500">Running</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
