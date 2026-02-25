<?php
// Reports Page (Admin)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports | Admin</title>
    
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
                    <span class="material-symbols-outlined">description</span>
                    Reports
                </h1>
                <p class="text-gray-600">Generate and view system reports.</p>
            </div>
            
            <!-- Export Button -->
            <div class="mb-6">
                <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors text-sm font-medium flex items-center gap-2">
                    <span class="material-symbols-outlined" style="font-size: 18px;">download</span>
                    Export Report (PDF)
                </button>
            </div>
            
            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-600 mb-1">Total Revenue</p>
                            <p class="text-3xl font-bold text-gray-900">$45,230</p>
                            <p class="text-xs text-gray-500 mt-1">+12.5% this month</p>
                        </div>
                        <span class="material-symbols-outlined text-3xl text-blue-600" style="font-size: 40px;">attach_money</span>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-600 mb-1">Total Appointments</p>
                            <p class="text-3xl font-bold text-gray-900">3,892</p>
                            <p class="text-xs text-gray-500 mt-1">+8.2% this month</p>
                        </div>
                        <span class="material-symbols-outlined text-3xl text-green-600" style="font-size: 40px;">event_busy</span>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-600 mb-1">Avg. Appointment Cost</p>
                            <p class="text-3xl font-bold text-gray-900">$116.23</p>
                            <p class="text-xs text-gray-500 mt-1">Stable vs last month</p>
                        </div>
                        <span class="material-symbols-outlined text-3xl text-orange-600" style="font-size: 40px;">trending_up</span>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-600 mb-1">Completion Rate</p>
                            <p class="text-3xl font-bold text-gray-900">94.5%</p>
                            <p class="text-xs text-gray-500 mt-1">+2.1% this month</p>
                        </div>
                        <span class="material-symbols-outlined text-3xl text-red-600" style="font-size: 40px;">check_circle</span>
                    </div>
                </div>
            </div>
            
            <!-- Monthly Revenue Report -->
            <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">
                <h3 class="font-semibold text-gray-900 mb-4 flex items-center gap-2">
                    <span class="material-symbols-outlined">bar_chart</span>
                    Monthly Revenue Report
                </h3>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b border-gray-200 bg-gray-50">
                                <th class="px-6 py-3 text-left font-semibold text-gray-900">Month</th>
                                <th class="px-6 py-3 text-left font-semibold text-gray-900">Revenue</th>
                                <th class="px-6 py-3 text-left font-semibold text-gray-900">Appointments</th>
                                <th class="px-6 py-3 text-left font-semibold text-gray-900">Avg Cost</th>
                                <th class="px-6 py-3 text-left font-semibold text-gray-900">Growth</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-gray-200 hover:bg-gray-50">
                                <td class="px-6 py-4 font-medium text-gray-900">February 2026</td>
                                <td class="px-6 py-4 font-medium text-gray-900">$12,450</td>
                                <td class="px-6 py-4 text-gray-600">108</td>
                                <td class="px-6 py-4 text-gray-600">$115.28</td>
                                <td class="px-6 py-4">
                                    <span class="text-green-600 font-medium">+8.5%</span>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-gray-50">
                                <td class="px-6 py-4 font-medium text-gray-900">January 2026</td>
                                <td class="px-6 py-4 font-medium text-gray-900">$11,480</td>
                                <td class="px-6 py-4 text-gray-600">98</td>
                                <td class="px-6 py-4 text-gray-600">$117.14</td>
                                <td class="px-6 py-4">
                                    <span class="text-green-600 font-medium">+5.2%</span>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-gray-50">
                                <td class="px-6 py-4 font-medium text-gray-900">December 2025</td>
                                <td class="px-6 py-4 font-medium text-gray-900">$10,920</td>
                                <td class="px-6 py-4 text-gray-600">92</td>
                                <td class="px-6 py-4 text-gray-600">$118.70</td>
                                <td class="px-6 py-4">
                                    <span class="text-green-600 font-medium">+3.1%</span>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-gray-50">
                                <td class="px-6 py-4 font-medium text-gray-900">November 2025</td>
                                <td class="px-6 py-4 font-medium text-gray-900">$10,590</td>
                                <td class="px-6 py-4 text-gray-600">89</td>
                                <td class="px-6 py-4 text-gray-600">$119.00</td>
                                <td class="px-6 py-4">
                                    <span class="text-red-600 font-medium">-1.2%</span>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 font-medium text-gray-900">October 2025</td>
                                <td class="px-6 py-4 font-medium text-gray-900">$10,715</td>
                                <td class="px-6 py-4 text-gray-600">90</td>
                                <td class="px-6 py-4 text-gray-600">$119.06</td>
                                <td class="px-6 py-4">
                                    <span class="text-green-600 font-medium">+2.3%</span>
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
