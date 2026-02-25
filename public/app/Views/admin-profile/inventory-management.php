<?php
// Inventory Management Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management | Admin</title>
    
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
                    <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2">
                        <span class="material-symbols-outlined inline mr-2">inventory_2</span>
                        Inventory Management
                    </h1>
                    <p class="text-gray-600">Manage stock and inventory levels.</p>
                </div>
                <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors text-sm font-medium flex items-center gap-2">
                    <span class="material-symbols-outlined" style="font-size: 18px;">add</span>
                    Add Item
                </button>
            </div>
            
            <!-- Filter Bar -->
            <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-4 mb-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 items-end">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Category</label>
                        <select class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm">
                            <option>All Categories</option>
                            <option>Screens</option>
                            <option>Batteries</option>
                            <option>Chargers</option>
                            <option>Tools</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Stock Level</label>
                        <select class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm">
                            <option>All Levels</option>
                            <option>Low Stock</option>
                            <option>In Stock</option>
                            <option>Out of Stock</option>
                        </select>
                    </div>
                    <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors text-sm font-medium">
                        <span class="material-symbols-outlined inline mr-1" style="font-size: 18px;">search</span>
                        Search
                    </button>
                </div>
            </div>
            
            <!-- Inventory Table -->
            <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b border-gray-200 bg-gray-50">
                                <th class="px-6 py-3 text-left font-semibold text-gray-900">Item Name</th>
                                <th class="px-6 py-3 text-left font-semibold text-gray-900">Category</th>
                                <th class="px-6 py-3 text-left font-semibold text-gray-900">SKU</th>
                                <th class="px-6 py-3 text-left font-semibold text-gray-900">Current Stock</th>
                                <th class="px-6 py-3 text-left font-semibold text-gray-900">Reorder Level</th>
                                <th class="px-6 py-3 text-left font-semibold text-gray-900">Unit Cost</th>
                                <th class="px-6 py-3 text-left font-semibold text-gray-900">Status</th>
                                <th class="px-6 py-3 text-left font-semibold text-gray-900">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-gray-200 hover:bg-gray-50">
                                <td class="px-6 py-4 font-medium text-gray-900">iPhone 15 Screen</td>
                                <td class="px-6 py-4 text-gray-600">Screens</td>
                                <td class="px-6 py-4 text-gray-600 font-mono text-xs">IPS-IP15-001</td>
                                <td class="px-6 py-4 font-medium text-gray-900">24</td>
                                <td class="px-6 py-4 text-gray-600">5</td>
                                <td class="px-6 py-4 font-medium text-gray-900">$85.00</td>
                                <td class="px-6 py-4">
                                    <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-xs font-medium">In Stock</span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex gap-2">
                                        <button class="text-blue-600 hover:text-blue-700 text-xs font-medium">Edit</button>
                                        <button class="text-red-600 hover:text-red-700 text-xs font-medium">Delete</button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-gray-50">
                                <td class="px-6 py-4 font-medium text-gray-900">Samsung Galaxy S24 Screen</td>
                                <td class="px-6 py-4 text-gray-600">Screens</td>
                                <td class="px-6 py-4 text-gray-600 font-mono text-xs">IPS-SG24-001</td>
                                <td class="px-6 py-4 font-medium text-gray-900">18</td>
                                <td class="px-6 py-4 text-gray-600">5</td>
                                <td class="px-6 py-4 font-medium text-gray-900">$72.00</td>
                                <td class="px-6 py-4">
                                    <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-xs font-medium">In Stock</span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex gap-2">
                                        <button class="text-blue-600 hover:text-blue-700 text-xs font-medium">Edit</button>
                                        <button class="text-red-600 hover:text-red-700 text-xs font-medium">Delete</button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-gray-50">
                                <td class="px-6 py-4 font-medium text-gray-900">Generic Battery Pack</td>
                                <td class="px-6 py-4 text-gray-600">Batteries</td>
                                <td class="px-6 py-4 text-gray-600 font-mono text-xs">BAT-GEN-001</td>
                                <td class="px-6 py-4 font-medium text-gray-900">3</td>
                                <td class="px-6 py-4 text-gray-600">10</td>
                                <td class="px-6 py-4 font-medium text-gray-900">$15.50</td>
                                <td class="px-6 py-4">
                                    <span class="px-3 py-1 bg-red-100 text-red-800 rounded-full text-xs font-medium">Low Stock</span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex gap-2">
                                        <button class="text-blue-600 hover:text-blue-700 text-xs font-medium">Edit</button>
                                        <button class="text-red-600 hover:text-red-700 text-xs font-medium">Delete</button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-gray-50">
                                <td class="px-6 py-4 font-medium text-gray-900">USB-C Charging Cable</td>
                                <td class="px-6 py-4 text-gray-600">Chargers</td>
                                <td class="px-6 py-4 text-gray-600 font-mono text-xs">CHG-USB-002</td>
                                <td class="px-6 py-4 font-medium text-gray-900">0</td>
                                <td class="px-6 py-4 text-gray-600">8</td>
                                <td class="px-6 py-4 font-medium text-gray-900">$8.75</td>
                                <td class="px-6 py-4">
                                    <span class="px-3 py-1 bg-red-100 text-red-800 rounded-full text-xs font-medium">Out of Stock</span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex gap-2">
                                        <button class="text-blue-600 hover:text-blue-700 text-xs font-medium">Edit</button>
                                        <button class="text-red-600 hover:text-red-700 text-xs font-medium">Delete</button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 font-medium text-gray-900">Precision Screwdriver Set</td>
                                <td class="px-6 py-4 text-gray-600">Tools</td>
                                <td class="px-6 py-4 text-gray-600 font-mono text-xs">TOOL-SET-001</td>
                                <td class="px-6 py-4 font-medium text-gray-900">12</td>
                                <td class="px-6 py-4 text-gray-600">3</td>
                                <td class="px-6 py-4 font-medium text-gray-900">$24.99</td>
                                <td class="px-6 py-4">
                                    <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-xs font-medium">In Stock</span>
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
