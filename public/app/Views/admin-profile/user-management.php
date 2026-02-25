<?php
// User Management Page (Admin)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management | Admin</title>
    
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
            <div class="mb-8 flex items-center justify-between">
                <div>
                    <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined">group</span>
                        User Management
                    </h1>
                    <p class="text-gray-600">Manage system users and permissions.</p>
                </div>
                <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors text-sm font-medium flex items-center gap-2">
                    <span class="material-symbols-outlined" style="font-size: 18px;">add</span>
                    Add User
                </button>
            </div>
            
            <!-- Filter Bar -->
            <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-4 mb-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 items-end">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Role</label>
                        <select class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm">
                            <option>All Roles</option>
                            <option>Admin</option>
                            <option>Technician</option>
                            <option>Customer</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                        <select class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm">
                            <option>All Status</option>
                            <option>Active</option>
                            <option>Inactive</option>
                            <option>Suspended</option>
                        </select>
                    </div>
                    <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors text-sm font-medium">
                        <span class="material-symbols-outlined inline mr-1" style="font-size: 18px;">search</span>
                        Search
                    </button>
                </div>
            </div>
            
            <!-- Users Table -->
            <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b border-gray-200 bg-gray-50">
                                <th class="px-6 py-3 text-left font-semibold text-gray-900">Name</th>
                                <th class="px-6 py-3 text-left font-semibold text-gray-900">Email</th>
                                <th class="px-6 py-3 text-left font-semibold text-gray-900">Role</th>
                                <th class="px-6 py-3 text-left font-semibold text-gray-900">Joined</th>
                                <th class="px-6 py-3 text-left font-semibold text-gray-900">Status</th>
                                <th class="px-6 py-3 text-left font-semibold text-gray-900">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-gray-200 hover:bg-gray-50">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 bg-blue-600 rounded-full text-white flex items-center justify-center text-xs font-bold">JD</div>
                                        <div class="font-medium text-gray-900">Jane Doe</div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-gray-600">jane@example.com</td>
                                <td class="px-6 py-4">
                                    <span class="px-2 py-1 bg-purple-100 text-purple-800 rounded text-xs font-medium">Customer</span>
                                </td>
                                <td class="px-6 py-4 text-gray-600 text-xs">Jan 15, 2025</td>
                                <td class="px-6 py-4">
                                    <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-xs font-medium">Active</span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex gap-2">
                                        <button class="text-blue-600 hover:text-blue-700 text-xs font-medium">Edit</button>
                                        <button class="text-red-600 hover:text-red-700 text-xs font-medium">Delete</button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-gray-50">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 bg-green-600 rounded-full text-white flex items-center justify-center text-xs font-bold">JS</div>
                                        <div class="font-medium text-gray-900">John Smith</div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-gray-600">john@repairmax.com</td>
                                <td class="px-6 py-4">
                                    <span class="px-2 py-1 bg-blue-100 text-blue-800 rounded text-xs font-medium">Technician</span>
                                </td>
                                <td class="px-6 py-4 text-gray-600 text-xs">Nov 3, 2024</td>
                                <td class="px-6 py-4">
                                    <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-xs font-medium">Active</span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex gap-2">
                                        <button class="text-blue-600 hover:text-blue-700 text-xs font-medium">Edit</button>
                                        <button class="text-red-600 hover:text-red-700 text-xs font-medium">Delete</button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-gray-50">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 bg-orange-600 rounded-full text-white flex items-center justify-center text-xs font-bold">MJ</div>
                                        <div class="font-medium text-gray-900">Mike Johnson</div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-gray-600">mike@example.com</td>
                                <td class="px-6 py-4">
                                    <span class="px-2 py-1 bg-purple-100 text-purple-800 rounded text-xs font-medium">Customer</span>
                                </td>
                                <td class="px-6 py-4 text-gray-600 text-xs">Dec 10, 2024</td>
                                <td class="px-6 py-4">
                                    <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-xs font-medium">Active</span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex gap-2">
                                        <button class="text-blue-600 hover:text-blue-700 text-xs font-medium">Edit</button>
                                        <button class="text-red-600 hover:text-red-700 text-xs font-medium">Delete</button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-gray-50">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 bg-pink-600 rounded-full text-white flex items-center justify-center text-xs font-bold">SJ</div>
                                        <div class="font-medium text-gray-900">Sarah Johnson</div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-gray-600">sarah@repairmax.com</td>
                                <td class="px-6 py-4">
                                    <span class="px-2 py-1 bg-blue-100 text-blue-800 rounded text-xs font-medium">Technician</span>
                                </td>
                                <td class="px-6 py-4 text-gray-600 text-xs">Sep 22, 2024</td>
                                <td class="px-6 py-4">
                                    <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-xs font-medium">Active</span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex gap-2">
                                        <button class="text-blue-600 hover:text-blue-700 text-xs font-medium">Edit</button>
                                        <button class="text-red-600 hover:text-red-700 text-xs font-medium">Delete</button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 bg-indigo-600 rounded-full text-white flex items-center justify-center text-xs font-bold">MD</div>
                                        <div class="font-medium text-gray-900">Mike Davis</div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-gray-600">mike.davis@repairmax.com</td>
                                <td class="px-6 py-4">
                                    <span class="px-2 py-1 bg-blue-100 text-blue-800 rounded text-xs font-medium">Technician</span>
                                </td>
                                <td class="px-6 py-4 text-gray-600 text-xs">Aug 15, 2024</td>
                                <td class="px-6 py-4">
                                    <span class="px-3 py-1 bg-gray-100 text-gray-800 rounded-full text-xs font-medium">Inactive</span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex gap-2">
                                        <button class="text-blue-600 hover:text-blue-700 text-xs font-medium">Edit</button>
                                        <button class="text-red-600 hover:text-red-700 text-xs font-medium">Delete</button>
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
