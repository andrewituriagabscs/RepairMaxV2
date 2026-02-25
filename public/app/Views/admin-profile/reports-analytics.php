<?php
// Reports Analytics Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports Analytics | Admin</title>
    
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
        <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8 py-8">
            <div class="mb-8">
                <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2 flex items-center gap-2">
                    <span class="material-symbols-outlined">analytics</span>
                    Analytics
                </h1>
                <p class="text-gray-600">View detailed analytics and performance metrics.</p>
            </div>
            
            <!-- Time Period Filter -->
            <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-4 mb-6">
                <div class="flex gap-4">
                    <select class="border border-gray-200 rounded-lg px-3 py-2 text-sm">
                        <option>Last 30 Days</option>
                        <option>Last 90 Days</option>
                        <option>Last Year</option>
                        <option>Custom Range</option>
                    </select>
                </div>
            </div>
            
            <!-- Key Metrics -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">
                    <p class="text-sm text-gray-600 mb-2">Avg. Appointment Duration</p>
                    <p class="text-3xl font-bold text-gray-900">54 mins</p>
                    <p class="text-xs text-gray-500 mt-2">-2 mins from last period</p>
                </div>
                
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">
                    <p class="text-sm text-gray-600 mb-2">Customer Satisfaction</p>
                    <p class="text-3xl font-bold text-gray-900">4.8/5</p>
                    <p class="text-xs text-gray-500 mt-2">+0.3 from last period</p>
                </div>
                
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">
                    <p class="text-sm text-gray-600 mb-2">Technician Utilization</p>
                    <p class="text-3xl font-bold text-gray-900">87%</p>
                    <p class="text-xs text-gray-500 mt-2">+5% from last period</p>
                </div>
                
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">
                    <p class="text-sm text-gray-600 mb-2">Repeat Customer Rate</p>
                    <p class="text-3xl font-bold text-gray-900">64%</p>
                    <p class="text-xs text-gray-500 mt-2">+8% from last period</p>
                </div>
            </div>
            
            <!-- Service Type Analysis -->
            <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6 mb-6">
                <h3 class="font-semibold text-gray-900 mb-4 flex items-center gap-2">
                    <span class="material-symbols-outlined">category</span>
                    Service Type Breakdown (Last 30 Days)
                </h3>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b border-gray-200 bg-gray-50">
                                <th class="px-6 py-3 text-left font-semibold text-gray-900">Service Type</th>
                                <th class="px-6 py-3 text-left font-semibold text-gray-900">Count</th>
                                <th class="px-6 py-3 text-left font-semibold text-gray-900">Revenue</th>
                                <th class="px-6 py-3 text-left font-semibold text-gray-900">% of Total</th>
                                <th class="px-6 py-3 text-left font-semibold text-gray-900">Avg. Rating</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-gray-200 hover:bg-gray-50">
                                <td class="px-6 py-4 font-medium text-gray-900">Screen Replacement</td>
                                <td class="px-6 py-4 text-gray-600">245</td>
                                <td class="px-6 py-4 font-medium text-gray-900">$18,675</td>
                                <td class="px-6 py-4 text-gray-600">38.2%</td>
                                <td class="px-6 py-4 text-yellow-600 font-medium">4.9/5</td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-gray-50">
                                <td class="px-6 py-4 font-medium text-gray-900">Battery Replacement</td>
                                <td class="px-6 py-4 text-gray-600">156</td>
                                <td class="px-6 py-4 font-medium text-gray-900">$7,280</td>
                                <td class="px-6 py-4 text-gray-600">14.9%</td>
                                <td class="px-6 py-4 text-yellow-600 font-medium">4.7/5</td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-gray-50">
                                <td class="px-6 py-4 font-medium text-gray-900">Water Damage Repair</td>
                                <td class="px-6 py-4 text-gray-600">89</td>
                                <td class="px-6 py-4 font-medium text-gray-900">$12,460</td>
                                <td class="px-6 py-4 text-gray-600">25.5%</td>
                                <td class="px-6 py-4 text-yellow-600 font-medium">4.6/5</td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-gray-50">
                                <td class="px-6 py-4 font-medium text-gray-900">Charging Port Repair</td>
                                <td class="px-6 py-4 text-gray-600">67</td>
                                <td class="px-6 py-4 font-medium text-gray-900">$4,890</td>
                                <td class="px-6 py-4 text-gray-600">10.0%</td>
                                <td class="px-6 py-4 text-yellow-600 font-medium">4.8/5</td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 font-medium text-gray-900">Other Services</td>
                                <td class="px-6 py-4 text-gray-600">43</td>
                                <td class="px-6 py-4 font-medium text-gray-900">$3,925</td>
                                <td class="px-6 py-4 text-gray-600">8.0%</td>
                                <td class="px-6 py-4 text-yellow-600 font-medium">4.9/5</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <!-- Technician Performance -->
            <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">
                <h3 class="font-semibold text-gray-900 mb-4 flex items-center gap-2">
                    <span class="material-symbols-outlined">people</span>
                    Technician Performance (Last 30 Days)
                </h3>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b border-gray-200 bg-gray-50">
                                <th class="px-6 py-3 text-left font-semibold text-gray-900">Technician</th>
                                <th class="px-6 py-3 text-left font-semibold text-gray-900">Jobs Completed</th>
                                <th class="px-6 py-3 text-left font-semibold text-gray-900">Avg. Completion Time</th>
                                <th class="px-6 py-3 text-left font-semibold text-gray-900">Customer Rating</th>
                                <th class="px-6 py-3 text-left font-semibold text-gray-900">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-gray-200 hover:bg-gray-50">
                                <td class="px-6 py-4 font-medium text-gray-900">John Smith</td>
                                <td class="px-6 py-4 text-gray-600">67</td>
                                <td class="px-6 py-4 text-gray-600">52 mins</td>
                                <td class="px-6 py-4 text-yellow-600 font-medium">4.9/5</td>
                                <td class="px-6 py-4">
                                    <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-xs font-medium">Excellent</span>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-gray-50">
                                <td class="px-6 py-4 font-medium text-gray-900">Sarah Johnson</td>
                                <td class="px-6 py-4 text-gray-600">56</td>
                                <td class="px-6 py-4 text-gray-600">55 mins</td>
                                <td class="px-6 py-4 text-yellow-600 font-medium">4.7/5</td>
                                <td class="px-6 py-4">
                                    <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-xs font-medium">Excellent</span>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-gray-50">
                                <td class="px-6 py-4 font-medium text-gray-900">Mike Davis</td>
                                <td class="px-6 py-4 text-gray-600">48</td>
                                <td class="px-6 py-4 text-gray-600">58 mins</td>
                                <td class="px-6 py-4 text-yellow-600 font-medium">4.6/5</td>
                                <td class="px-6 py-4">
                                    <span class="px-3 py-1 bg-yellow-100 text-yellow-800 rounded-full text-xs font-medium">Good</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
