<?php
// Admin Dashboard Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Admin</title>
    
    <link rel="icon" type="image/x-icon" href="../../../assets/img/repairlogocircle.png">
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" rel="stylesheet" />
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
        
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
        
        .stat-card {
            transition: all 0.3s ease;
        }
        
        .stat-card:hover {
            transform: translateY(-4px);
        }
    </style>
</head>
<body class="font-sans antialiased bg-gray-50">
    
    <?php include '../partials/sidebar-admin.php'; ?>
    
    <main class="transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8 py-8">
            
            <!-- Page Header -->
            <div class="mb-8 flex justify-between items-start">
                <div>
                    <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2">Admin Dashboard</h1>
                    <p class="text-gray-600">System overview and management tools.</p>
                </div>
                <a href="/public/app/Views/admin-profile/appointment-management.php" class="inline-flex items-center gap-2 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                    <span class="material-symbols-outlined">add</span>
                    Manage Appointments
                </a>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                
                <!-- Total Users -->
                <div class="stat-card bg-white rounded-xl p-6 border border-gray-200 shadow-sm">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-sm font-medium text-gray-600">Total Users</h3>
                        <div class="bg-blue-100 p-3 rounded-lg">
                            <span class="material-symbols-outlined text-blue-600">group</span>
                        </div>
                    </div>
                    <p class="text-2xl font-bold text-gray-900">1,247</p>
                    <p class="text-xs text-gray-500 mt-2">+45 this month</p>
                </div>

                <!-- Total Appointments -->
                <div class="stat-card bg-white rounded-xl p-6 border border-gray-200 shadow-sm">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-sm font-medium text-gray-600">Total Appointments</h3>
                        <div class="bg-green-100 p-3 rounded-lg">
                            <span class="material-symbols-outlined text-green-600">calendar_month</span>
                        </div>
                    </div>
                    <p class="text-2xl font-bold text-gray-900">3,892</p>
                    <p class="text-xs text-gray-500 mt-2">421 completed today</p>
                </div>

                <!-- Revenue -->
                <div class="stat-card bg-white rounded-xl p-6 border border-gray-200 shadow-sm">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-sm font-medium text-gray-600">Monthly Revenue</h3>
                        <div class="bg-yellow-100 p-3 rounded-lg">
                            <span class="material-symbols-outlined text-yellow-600">attach_money</span>
                        </div>
                    </div>
                    <p class="text-2xl font-bold text-gray-900">$45,230</p>
                    <p class="text-xs text-gray-500 mt-2">↑ 12% from last month</p>
                </div>

                <!-- System Health -->
                <div class="stat-card bg-white rounded-xl p-6 border border-gray-200 shadow-sm">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-sm font-medium text-gray-600">System Health</h3>
                        <div class="bg-purple-100 p-3 rounded-lg">
                            <span class="material-symbols-outlined text-purple-600">favorite</span>
                        </div>
                    </div>
                    <p class="text-2xl font-bold text-gray-900">99.8%</p>
                    <p class="text-xs text-green-600 mt-2">All systems operational</p>
                </div>

            </div>

            <!-- Overview Tables Row -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
                
                <!-- Recent Appointments -->
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-200 bg-gray-50">
                        <h2 class="text-lg font-bold text-gray-900 flex items-center gap-2">
                            <span class="material-symbols-outlined">receipt</span>
                            Recent Appointments
                        </h2>
                    </div>

                    <div class="divide-y divide-gray-200">
                        <div class="px-6 py-3 flex items-center justify-between hover:bg-gray-50 transition-colors">
                            <div>
                                <p class="text-sm font-medium text-gray-900">iPhone 14 Pro - Screen Replacement</p>
                                <p class="text-xs text-gray-500">John Doe • Feb 25, 2026</p>
                            </div>
                            <span class="inline-flex items-center gap-1 px-2 py-1 bg-green-100 text-green-700 rounded text-xs font-medium">
                                <span class="material-symbols-outlined text-sm">check_circle</span>
                                Completed
                            </span>
                        </div>
                        <div class="px-6 py-3 flex items-center justify-between hover:bg-gray-50 transition-colors">
                            <div>
                                <p class="text-sm font-medium text-gray-900">Galaxy S23 - Battery Replacement</p>
                                <p class="text-xs text-gray-500">Jane Smith • Feb 26, 2026</p>
                            </div>
                            <span class="inline-flex items-center gap-1 px-2 py-1 bg-orange-100 text-orange-700 rounded text-xs font-medium">
                                <span class="material-symbols-outlined text-sm">schedule</span>
                                In Progress
                            </span>
                        </div>
                        <div class="px-6 py-3 flex items-center justify-between hover:bg-gray-50 transition-colors">
                            <div>
                                <p class="text-sm font-medium text-gray-900">Pixel 7 - Camera Repair</p>
                                <p class="text-xs text-gray-500">Mike Johnson • Feb 27, 2026</p>
                            </div>
                            <span class="inline-flex items-center gap-1 px-2 py-1 bg-purple-100 text-purple-700 rounded text-xs font-medium">
                                <span class="material-symbols-outlined text-sm">pending_actions</span>
                                Pending
                            </span>
                        </div>
                    </div>

                    <div class="px-6 py-4 border-t border-gray-200 bg-gray-50">
                        <a href="/public/app/Views/admin-profile/appointment-management.php" class="text-sm text-blue-600 hover:text-blue-700 font-medium flex items-center gap-1">
                            View All Appointments
                            <span class="material-symbols-outlined text-sm">arrow_forward</span>
                        </a>
                    </div>
                </div>

                <!-- Recent Users -->
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-200 bg-gray-50">
                        <h2 class="text-lg font-bold text-gray-900 flex items-center gap-2">
                            <span class="material-symbols-outlined">people</span>
                            Recent Users
                        </h2>
                    </div>

                    <div class="divide-y divide-gray-200">
                        <div class="px-6 py-3 flex items-center justify-between hover:bg-gray-50 transition-colors">
                            <div class="flex items-center gap-3">
                                <img src="https://via.placeholder.com/40" alt="User" class="w-8 h-8 rounded-full bg-gray-300">
                                <div>
                                    <p class="text-sm font-medium text-gray-900">John Doe</p>
                                    <p class="text-xs text-gray-500">joined 2 days ago</p>
                                </div>
                            </div>
                            <span class="px-2 py-1 bg-green-100 text-green-700 rounded text-xs font-medium">Active</span>
                        </div>
                        <div class="px-6 py-3 flex items-center justify-between hover:bg-gray-50 transition-colors">
                            <div class="flex items-center gap-3">
                                <img src="https://via.placeholder.com/40" alt="User" class="w-8 h-8 rounded-full bg-gray-300">
                                <div>
                                    <p class="text-sm font-medium text-gray-900">Jane Smith</p>
                                    <p class="text-xs text-gray-500">joined 5 days ago</p>
                                </div>
                            </div>
                            <span class="px-2 py-1 bg-green-100 text-green-700 rounded text-xs font-medium">Active</span>
                        </div>
                        <div class="px-6 py-3 flex items-center justify-between hover:bg-gray-50 transition-colors">
                            <div class="flex items-center gap-3">
                                <img src="https://via.placeholder.com/40" alt="User" class="w-8 h-8 rounded-full bg-gray-300">
                                <div>
                                    <p class="text-sm font-medium text-gray-900">Mike Johnson</p>
                                    <p class="text-xs text-gray-500">joined 1 week ago</p>
                                </div>
                            </div>
                            <span class="px-2 py-1 bg-gray-100 text-gray-700 rounded text-xs font-medium">Inactive</span>
                        </div>
                    </div>

                    <div class="px-6 py-4 border-t border-gray-200 bg-gray-50">
                        <a href="/public/app/Views/admin-profile/user-management.php" class="text-sm text-blue-600 hover:text-blue-700 font-medium flex items-center gap-1">
                            Manage Users
                            <span class="material-symbols-outlined text-sm">arrow_forward</span>
                        </a>
                    </div>
                </div>

            </div>

            <!-- Inventory Overview -->
            <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
                <div class="px-6 py-4 border-b border-gray-200 bg-gray-50">
                    <h2 class="text-lg font-bold text-gray-900 flex items-center gap-2">
                        <span class="material-symbols-outlined">inventory_2</span>
                        Inventory Status
                    </h2>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gray-50 border-b border-gray-200">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Item</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Category</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Stock</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Status</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-4 text-sm text-gray-900 font-medium">iPhone 14 Screen</td>
                                <td class="px-6 py-4 text-sm text-gray-600">Display Parts</td>
                                <td class="px-6 py-4 text-sm text-gray-900">24</td>
                                <td class="px-6 py-4 text-sm">
                                    <span class="inline-flex items-center gap-1 px-2 py-1 bg-green-100 text-green-700 rounded text-xs font-medium">In Stock</span>
                                </td>
                                <td class="px-6 py-4 text-sm">
                                    <a href="/public/app/Views/admin-profile/inventory-management.php" class="text-blue-600 hover:text-blue-700 font-medium">Edit</a>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-4 text-sm text-gray-900 font-medium">Battery Pack 5000mAh</td>
                                <td class="px-6 py-4 text-sm text-gray-600">Battery</td>
                                <td class="px-6 py-4 text-sm text-gray-900">8</td>
                                <td class="px-6 py-4 text-sm">
                                    <span class="inline-flex items-center gap-1 px-2 py-1 bg-orange-100 text-orange-700 rounded text-xs font-medium">Low Stock</span>
                                </td>
                                <td class="px-6 py-4 text-sm">
                                    <a href="/public/app/Views/admin-profile/inventory-management.php" class="text-blue-600 hover:text-blue-700 font-medium">Edit</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="px-6 py-4 border-t border-gray-200 bg-gray-50">
                    <a href="/public/app/Views/admin-profile/inventory-management.php" class="text-sm text-blue-600 hover:text-blue-700 font-medium flex items-center gap-1">
                        Manage Inventory
                        <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </a>
                </div>
            </div>

        </div>
    </main>

</body>
</html>
