<?php
// Messages Support Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages Support | Admin</title>
    
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
                    <span class="material-symbols-outlined">support_agent</span>
                    Support Messages
                </h1>
                <p class="text-gray-600">Manage user support requests and messages.</p>
            </div>
            
            <!-- Filter Bar -->
            <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-4 mb-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 items-end">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                        <select class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm">
                            <option>All Statuses</option>
                            <option>Open</option>
                            <option>In Progress</option>
                            <option>Closed</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Priority</label>
                        <select class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm">
                            <option>All Priorities</option>
                            <option>High</option>
                            <option>Medium</option>
                            <option>Low</option>
                        </select>
                    </div>
                    <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors text-sm font-medium">
                        <span class="material-symbols-outlined inline mr-1" style="font-size: 18px;">search</span>
                        Search
                    </button>
                </div>
            </div>
            
            <!-- Support Tickets Table -->
            <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b border-gray-200 bg-gray-50">
                                <th class="px-6 py-3 text-left font-semibold text-gray-900">Ticket ID</th>
                                <th class="px-6 py-3 text-left font-semibold text-gray-900">Subject</th>
                                <th class="px-6 py-3 text-left font-semibold text-gray-900">Customer</th>
                                <th class="px-6 py-3 text-left font-semibold text-gray-900">Submitted</th>
                                <th class="px-6 py-3 text-left font-semibold text-gray-900">Priority</th>
                                <th class="px-6 py-3 text-left font-semibold text-gray-900">Status</th>
                                <th class="px-6 py-3 text-left font-semibold text-gray-900">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-gray-200 hover:bg-gray-50">
                                <td class="px-6 py-4 font-mono font-medium text-gray-900">#TKT-2026-001</td>
                                <td class="px-6 py-4 font-medium text-gray-900">Screen replacement quality issue</td>
                                <td class="px-6 py-4 text-gray-600">Jane Doe</td>
                                <td class="px-6 py-4 text-gray-600 text-xs">Feb 26, 2:30 PM</td>
                                <td class="px-6 py-4">
                                    <span class="px-2 py-1 bg-red-100 text-red-800 rounded text-xs font-medium">High</span>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="px-3 py-1 bg-orange-100 text-orange-800 rounded-full text-xs font-medium">In Progress</span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex gap-2">
                                        <button class="text-blue-600 hover:text-blue-700 text-xs font-medium">View</button>
                                        <button class="text-green-600 hover:text-green-700 text-xs font-medium">Reply</button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-gray-50">
                                <td class="px-6 py-4 font-mono font-medium text-gray-900">#TKT-2026-002</td>
                                <td class="px-6 py-4 font-medium text-gray-900">Appointment cancellation request</td>
                                <td class="px-6 py-4 text-gray-600">Mike Johnson</td>
                                <td class="px-6 py-4 text-gray-600 text-xs">Feb 25, 10:15 AM</td>
                                <td class="px-6 py-4">
                                    <span class="px-2 py-1 bg-yellow-100 text-yellow-800 rounded text-xs font-medium">Medium</span>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-xs font-medium">Closed</span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex gap-2">
                                        <button class="text-blue-600 hover:text-blue-700 text-xs font-medium">View</button>
                                        <button class="text-gray-400 cursor-not-allowed text-xs font-medium">Reply</button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-gray-50">
                                <td class="px-6 py-4 font-mono font-medium text-gray-900">#TKT-2026-003</td>
                                <td class="px-6 py-4 font-medium text-gray-900">Billing inquiry for recent repair</td>
                                <td class="px-6 py-4 text-gray-600">Emma Wilson</td>
                                <td class="px-6 py-4 text-gray-600 text-xs">Feb 24, 4:45 PM</td>
                                <td class="px-6 py-4">
                                    <span class="px-2 py-1 bg-green-100 text-green-800 rounded text-xs font-medium">Low</span>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-xs font-medium">Open</span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex gap-2">
                                        <button class="text-blue-600 hover:text-blue-700 text-xs font-medium">View</button>
                                        <button class="text-green-600 hover:text-green-700 text-xs font-medium">Reply</button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-gray-50">
                                <td class="px-6 py-4 font-mono font-medium text-gray-900">#TKT-2026-004</td>
                                <td class="px-6 py-4 font-medium text-gray-900">Warranty claim for battery issue</td>
                                <td class="px-6 py-4 text-gray-600">Robert Davis</td>
                                <td class="px-6 py-4 text-gray-600 text-xs">Feb 23, 9:20 AM</td>
                                <td class="px-6 py-4">
                                    <span class="px-2 py-1 bg-red-100 text-red-800 rounded text-xs font-medium">High</span>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-xs font-medium">Open</span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex gap-2">
                                        <button class="text-blue-600 hover:text-blue-700 text-xs font-medium">View</button>
                                        <button class="text-green-600 hover:text-green-700 text-xs font-medium">Reply</button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 font-mono font-medium text-gray-900">#TKT-2026-005</td>
                                <td class="px-6 py-4 font-medium text-gray-900">How to schedule an appointment</td>
                                <td class="px-6 py-4 text-gray-600">Lisa Chen</td>
                                <td class="px-6 py-4 text-gray-600 text-xs">Feb 22, 3:00 PM</td>
                                <td class="px-6 py-4">
                                    <span class="px-2 py-1 bg-green-100 text-green-800 rounded text-xs font-medium">Low</span>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="px-3 py-1 bg-orange-100 text-orange-800 rounded-full text-xs font-medium">In Progress</span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex gap-2">
                                        <button class="text-blue-600 hover:text-blue-700 text-xs font-medium">View</button>
                                        <button class="text-green-600 hover:text-green-700 text-xs font-medium">Reply</button>
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
