<?php
// Appointment Management Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Management | Admin</title>
    
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
                <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2">
                    <span class="material-symbols-outlined inline mr-2">calendar_today</span>
                    Appointment Management
                </h1>
                <p class="text-gray-600">Manage and monitor all system appointments.</p>
            </div>
            
            <!-- Filter Bar -->
            <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-4 mb-6">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-end">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                        <select class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm">
                            <option>All Statuses</option>
                            <option>Pending</option>
                            <option>In Progress</option>
                            <option>Completed</option>
                            <option>Cancelled</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Date Range</label>
                        <select class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm">
                            <option>All Dates</option>
                            <option>Today</option>
                            <option>This Week</option>
                            <option>This Month</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Technician</label>
                        <select class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm">
                            <option>All Technicians</option>
                            <option>John Smith</option>
                            <option>Sarah Johnson</option>
                            <option>Mike Davis</option>
                        </select>
                    </div>
                    <button class="btn btn-primary bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors text-sm font-medium">
                        <span class="material-symbols-outlined inline mr-1" style="font-size: 18px;">search</span>
                        Search
                    </button>
                </div>
            </div>
            
            <!-- Appointments Table -->
            <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b border-gray-200 bg-gray-50">
                                <th class="px-6 py-3 text-left font-semibold text-gray-900">Customer</th>
                                <th class="px-6 py-3 text-left font-semibold text-gray-900">Device</th>
                                <th class="px-6 py-3 text-left font-semibold text-gray-900">Date & Time</th>
                                <th class="px-6 py-3 text-left font-semibold text-gray-900">Technician</th>
                                <th class="px-6 py-3 text-left font-semibold text-gray-900">Cost</th>
                                <th class="px-6 py-3 text-left font-semibold text-gray-900">Status</th>
                                <th class="px-6 py-3 text-left font-semibold text-gray-900">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-gray-200 hover:bg-gray-50">
                                <td class="px-6 py-4">
                                    <div class="font-medium text-gray-900">Jane Doe</div>
                                    <div class="text-xs text-gray-500">jane@example.com</div>
                                </td>
                                <td class="px-6 py-4">iPhone 15 Pro</td>
                                <td class="px-6 py-4">
                                    <div class="font-medium text-gray-900">Feb 28, 2026</div>
                                    <div class="text-xs text-gray-500">2:00 PM - 3:00 PM</div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="font-medium text-gray-900">John Smith</div>
                                </td>
                                <td class="px-6 py-4 font-medium text-gray-900">$249.00</td>
                                <td class="px-6 py-4">
                                    <span class="px-3 py-1 bg-yellow-100 text-yellow-800 rounded-full text-xs font-medium">In Progress</span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex gap-2">
                                        <button class="text-blue-600 hover:text-blue-700 text-xs font-medium">View</button>
                                        <button class="text-green-600 hover:text-green-700 text-xs font-medium">Complete</button>
                                        <button class="text-red-600 hover:text-red-700 text-xs font-medium">Cancel</button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-gray-50">
                                <td class="px-6 py-4">
                                    <div class="font-medium text-gray-900">Mike Johnson</div>
                                    <div class="text-xs text-gray-500">mike@example.com</div>
                                </td>
                                <td class="px-6 py-4">Samsung Galaxy S24</td>
                                <td class="px-6 py-4">
                                    <div class="font-medium text-gray-900">Feb 27, 2026</div>
                                    <div class="text-xs text-gray-500">10:00 AM - 11:00 AM</div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="font-medium text-gray-900">Sarah Johnson</div>
                                </td>
                                <td class="px-6 py-4 font-medium text-gray-900">$189.00</td>
                                <td class="px-6 py-4">
                                    <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-xs font-medium">Completed</span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex gap-2">
                                        <button class="text-blue-600 hover:text-blue-700 text-xs font-medium">View</button>
                                        <button class="text-gray-400 cursor-not-allowed text-xs font-medium">Complete</button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-gray-50">
                                <td class="px-6 py-4">
                                    <div class="font-medium text-gray-900">Robert Davis</div>
                                    <div class="text-xs text-gray-500">robert@example.com</div>
                                </td>
                                <td class="px-6 py-4">iPad Air</td>
                                <td class="px-6 py-4">
                                    <div class="font-medium text-gray-900">Mar 1, 2026</div>
                                    <div class="text-xs text-gray-500">3:30 PM - 4:30 PM</div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="font-medium text-gray-900">Mike Davis</div>
                                </td>
                                <td class="px-6 py-4 font-medium text-gray-900">$329.00</td>
                                <td class="px-6 py-4">
                                    <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-xs font-medium">Pending</span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex gap-2">
                                        <button class="text-blue-600 hover:text-blue-700 text-xs font-medium">View</button>
                                        <button class="text-green-600 hover:text-green-700 text-xs font-medium">Start</button>
                                        <button class="text-red-600 hover:text-red-700 text-xs font-medium">Cancel</button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4">
                                    <div class="font-medium text-gray-900">Emma Wilson</div>
                                    <div class="text-xs text-gray-500">emma@example.com</div>
                                </td>
                                <td class="px-6 py-4">MacBook Pro</td>
                                <td class="px-6 py-4">
                                    <div class="font-medium text-gray-900">Mar 2, 2026</div>
                                    <div class="text-xs text-gray-500">1:00 PM - 2:00 PM</div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="font-medium text-gray-900">John Smith</div>
                                </td>
                                <td class="px-6 py-4 font-medium text-gray-900">$199.00</td>
                                <td class="px-6 py-4">
                                    <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-xs font-medium">Pending</span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex gap-2">
                                        <button class="text-blue-600 hover:text-blue-700 text-xs font-medium">View</button>
                                        <button class="text-green-600 hover:text-green-700 text-xs font-medium">Start</button>
                                        <button class="text-red-600 hover:text-red-700 text-xs font-medium">Cancel</button>
                                    </div>
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
