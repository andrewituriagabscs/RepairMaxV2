<?php
// User Dashboard Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | User</title>
    
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
    
    <?php include '../partials/sidebar-user.php'; ?>
    
    <main class="transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8 py-8">
            
            <!-- Page Header -->
            <div class="mb-8 flex justify-between items-start">
                <div>
                    <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2">Welcome back!</h1>
                    <p class="text-gray-600">Here's what's happening with your repairs today.</p>
                </div>
                <a href="/public/app/Views/user-profile/book-appointment.php" class="inline-flex items-center gap-2 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                    <span class="material-symbols-outlined">add</span>
                    New Appointment
                </a>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                
                <!-- Total Appointments -->
                <div class="stat-card bg-white rounded-xl p-6 border border-gray-200 shadow-sm">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-sm font-medium text-gray-600">Total Appointments</h3>
                        <div class="bg-blue-100 p-3 rounded-lg">
                            <span class="material-symbols-outlined text-blue-600">calendar_today</span>
                        </div>
                    </div>
                    <p class="text-2xl font-bold text-gray-900">12</p>
                    <p class="text-xs text-gray-500 mt-2">2 this month</p>
                </div>

                <!-- Completed Repairs -->
                <div class="stat-card bg-white rounded-xl p-6 border border-gray-200 shadow-sm">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-sm font-medium text-gray-600">Completed Repairs</h3>
                        <div class="bg-green-100 p-3 rounded-lg">
                            <span class="material-symbols-outlined text-green-600">check_circle</span>
                        </div>
                    </div>
                    <p class="text-2xl font-bold text-gray-900">8</p>
                    <p class="text-xs text-gray-500 mt-2">All successful</p>
                </div>

                <!-- Active Repairs -->
                <div class="stat-card bg-white rounded-xl p-6 border border-gray-200 shadow-sm">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-sm font-medium text-gray-600">In Progress</h3>
                        <div class="bg-orange-100 p-3 rounded-lg">
                            <span class="material-symbols-outlined text-orange-600">hourglass_bottom</span>
                        </div>
                    </div>
                    <p class="text-2xl font-bold text-gray-900">2</p>
                    <p class="text-xs text-gray-500 mt-2">Estimated 4 hours</p>
                </div>

                <!-- Pending Repairs -->
                <div class="stat-card bg-white rounded-xl p-6 border border-gray-200 shadow-sm">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-sm font-medium text-gray-600">Pending</h3>
                        <div class="bg-purple-100 p-3 rounded-lg">
                            <span class="material-symbols-outlined text-purple-600">pending_actions</span>
                        </div>
                    </div>
                    <p class="text-2xl font-bold text-gray-900">2</p>
                    <p class="text-xs text-gray-500 mt-2">Waiting for approval</p>
                </div>

            </div>

            <!-- Recent Appointments Table -->
            <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
                <div class="px-6 py-4 border-b border-gray-200 bg-gray-50">
                    <h2 class="text-lg font-bold text-gray-900 flex items-center gap-2">
                        <span class="material-symbols-outlined">receipt</span>
                        Recent Appointments
                    </h2>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gray-50 border-b border-gray-200">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Device</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Service</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Date</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Status</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Price</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <!-- Row 1 -->
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-4 text-sm text-gray-900 font-medium">iPhone 14 Pro</td>
                                <td class="px-6 py-4 text-sm text-gray-600">Screen Replacement</td>
                                <td class="px-6 py-4 text-sm text-gray-600">Feb 25, 2026</td>
                                <td class="px-6 py-4 text-sm">
                                    <span class="inline-flex items-center gap-1 px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-medium">
                                        <span class="material-symbols-outlined text-sm">check_circle</span>
                                        Completed
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-sm font-medium text-gray-900">$299</td>
                                <td class="px-6 py-4 text-sm">
                                    <a href="/public/app/Views/user-profile/appointment.php" class="text-blue-600 hover:text-blue-700 font-medium">View</a>
                                </td>
                            </tr>
                            
                            <!-- Row 2 -->
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-4 text-sm text-gray-900 font-medium">Samsung Galaxy S23</td>
                                <td class="px-6 py-4 text-sm text-gray-600">Battery Replacement</td>
                                <td class="px-6 py-4 text-sm text-gray-600">Feb 26, 2026</td>
                                <td class="px-6 py-4 text-sm">
                                    <span class="inline-flex items-center gap-1 px-3 py-1 bg-orange-100 text-orange-700 rounded-full text-xs font-medium">
                                        <span class="material-symbols-outlined text-sm">schedule</span>
                                        In Progress
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-sm font-medium text-gray-900">$89</td>
                                <td class="px-6 py-4 text-sm">
                                    <a href="/public/app/Views/user-profile/appointment.php" class="text-blue-600 hover:text-blue-700 font-medium">View</a>
                                </td>
                            </tr>
                            
                            <!-- Row 3 -->
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-4 text-sm text-gray-900 font-medium">Google Pixel 7</td>
                                <td class="px-6 py-4 text-sm text-gray-600">Camera Repair</td>
                                <td class="px-6 py-4 text-sm text-gray-600">Feb 27, 2026</td>
                                <td class="px-6 py-4 text-sm">
                                    <span class="inline-flex items-center gap-1 px-3 py-1 bg-purple-100 text-purple-700 rounded-full text-xs font-medium">
                                        <span class="material-symbols-outlined text-sm">pending_actions</span>
                                        Pending
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-sm font-medium text-gray-900">$149</td>
                                <td class="px-6 py-4 text-sm">
                                    <a href="/public/app/Views/user-profile/appointment.php" class="text-blue-600 hover:text-blue-700 font-medium">View</a>
                                </td>
                            </tr>
                            
                            <!-- Row 4 -->
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-4 text-sm text-gray-900 font-medium">iPad Air 5</td>
                                <td class="px-6 py-4 text-sm text-gray-600">Display Fix</td>
                                <td class="px-6 py-4 text-sm text-gray-600">Feb 23, 2026</td>
                                <td class="px-6 py-4 text-sm">
                                    <span class="inline-flex items-center gap-1 px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-medium">
                                        <span class="material-symbols-outlined text-sm">check_circle</span>
                                        Completed
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-sm font-medium text-gray-900">$199</td>
                                <td class="px-6 py-4 text-sm">
                                    <a href="/public/app/Views/user-profile/appointment.php" class="text-blue-600 hover:text-blue-700 font-medium">View</a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

                <!-- View All Link -->
                <div class="px-6 py-4 border-t border-gray-200 bg-gray-50">
                    <a href="/public/app/Views/user-profile/upcoming-appointments.php" class="text-sm text-blue-600 hover:text-blue-700 font-medium flex items-center gap-1">
                        View All Appointments
                        <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </a>
                </div>
            </div>

        </div>
    </main>

</body>
</html>
