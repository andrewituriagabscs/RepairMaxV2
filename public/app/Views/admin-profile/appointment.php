<?php
// Appointment Details Page (Admin)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Details | Admin</title>
    
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
            <a href="javascript:history.back()" class="text-blue-600 hover:text-blue-700 font-medium flex items-center gap-1 mb-6">
                <span class="material-symbols-outlined text-sm">arrow_back</span>
                Back
            </a>
            
            <div class="mb-6">
                <div class="flex items-center justify-between mb-4">
                    <h1 class="text-3xl font-bold text-gray-900 flex items-center gap-2">
                        <span class="material-symbols-outlined">event</span>
                        Appointment Details
                    </h1>
                    <span class="px-4 py-2 bg-orange-100 text-orange-800 rounded-full text-sm font-medium">In Progress</span>
                </div>
            </div>
            
            <!-- Customer Info -->
            <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6 mb-6">
                <h3 class="font-semibold text-gray-900 mb-4 flex items-center gap-2">
                    <span class="material-symbols-outlined">person</span>
                    Customer Information
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <p class="text-sm text-gray-600 mb-1">Name</p>
                        <p class="text-lg font-semibold text-gray-900">Jane Doe</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600 mb-1">Email</p>
                        <p class="text-lg font-semibold text-gray-900">jane@example.com</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600 mb-1">Phone</p>
                        <p class="text-lg font-semibold text-gray-900">(555) 123-4567</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600 mb-1">Customer Status</p>
                        <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm font-medium inline-block">Regular</span>
                    </div>
                </div>
            </div>
            
            <!-- Appointment Details -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">
                    <p class="text-sm text-gray-600 mb-2">Date & Time</p>
                    <p class="text-2xl font-bold text-gray-900">Feb 28, 2026</p>
                    <p class="text-lg text-gray-600">2:00 PM - 3:00 PM</p>
                </div>
                
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">
                    <p class="text-sm text-gray-600 mb-2">Device</p>
                    <p class="text-2xl font-bold text-gray-900">iPhone 15 Pro</p>
                    <p class="text-lg text-gray-600">Screen Replacement</p>
                </div>
                
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">
                    <p class="text-sm text-gray-600 mb-2">Assigned Technician</p>
                    <p class="text-2xl font-bold text-gray-900">John Smith</p>
                    <p class="text-lg text-gray-600">Rating: 4.9/5</p>
                </div>
                
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">
                    <p class="text-sm text-gray-600 mb-2">Cost</p>
                    <p class="text-2xl font-bold text-gray-900">$249.00</p>
                    <p class="text-lg text-gray-600">OEM Screen</p>
                </div>
            </div>
            
            <!-- Services Details -->
            <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6 mb-6">
                <h3 class="font-semibold text-gray-900 mb-4 flex items-center gap-2">
                    <span class="material-symbols-outlined">build</span>
                    Services Performed
                </h3>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b border-gray-200 bg-gray-50">
                                <th class="px-4 py-3 text-left font-semibold text-gray-900">Service</th>
                                <th class="px-4 py-3 text-left font-semibold text-gray-900">Cost</th>
                                <th class="px-4 py-3 text-left font-semibold text-gray-900">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-gray-200">
                                <td class="px-4 py-3">Screen Replacement (OEM)</td>
                                <td class="px-4 py-3 font-medium">$249.00</td>
                                <td class="px-4 py-3">
                                    <span class="px-2 py-1 bg-orange-100 text-orange-800 rounded text-xs font-medium">In Progress</span>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200">
                                <td class="px-4 py-3">Diagnostic Fee</td>
                                <td class="px-4 py-3 font-medium">Waived</td>
                                <td class="px-4 py-3">
                                    <span class="px-2 py-1 bg-green-100 text-green-800 rounded text-xs font-medium">Completed</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <!-- Admin Actions -->
            <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">
                <h3 class="font-semibold text-gray-900 mb-4 flex items-center gap-2">
                    <span class="material-symbols-outlined">admin_panel_settings</span>
                    Admin Actions
                </h3>
                <div class="space-y-3">
                    <button class="w-full px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors text-sm font-medium flex items-center justify-center gap-2">
                        <span class="material-symbols-outlined" style="font-size: 18px;">check_circle</span>
                        Mark as Completed
                    </button>
                    <button class="w-full px-4 py-2 border border-gray-200 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors text-sm font-medium flex items-center justify-center gap-2">
                        <span class="material-symbols-outlined" style="font-size: 18px;">edit</span>
                        Edit Appointment
                    </button>
                    <button class="w-full px-4 py-2 border border-gray-200 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors text-sm font-medium flex items-center justify-center gap-2">
                        <span class="material-symbols-outlined" style="font-size: 18px;">mail</span>
                        Send Customer Notification
                    </button>
                    <button class="w-full px-4 py-2 border border-red-200 text-red-600 rounded-lg hover:bg-red-50 transition-colors text-sm font-medium flex items-center justify-center gap-2">
                        <span class="material-symbols-outlined" style="font-size: 18px;">cancel</span>
                        Cancel Appointment
                    </button>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
