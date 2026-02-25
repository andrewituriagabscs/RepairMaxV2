<?php
// Inventory Page (Admin)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory | Admin</title>
    
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
                    <span class="material-symbols-outlined">warehouse</span>
                    Inventory Overview
                </h1>
                <p class="text-gray-600">View current inventory status and stock levels.</p>
            </div>
            
            <!-- Inventory Stats -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-600 mb-1">Total Items</p>
                            <p class="text-3xl font-bold text-gray-900">142</p>
                            <p class="text-xs text-gray-500 mt-1">22 product types</p>
                        </div>
                        <span class="material-symbols-outlined text-3xl text-blue-600" style="font-size: 40px;">inventory_2</span>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-600 mb-1">In Stock</p>
                            <p class="text-3xl font-bold text-gray-900">128</p>
                            <p class="text-xs text-gray-500 mt-1">90.1% available</p>
                        </div>
                        <span class="material-symbols-outlined text-3xl text-green-600" style="font-size: 40px;">check_circle</span>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-600 mb-1">Low Stock</p>
                            <p class="text-3xl font-bold text-gray-900">11</p>
                            <p class="text-xs text-gray-500 mt-1">Reorder needed</p>
                        </div>
                        <span class="material-symbols-outlined text-3xl text-orange-600" style="font-size: 40px;">warning</span>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-600 mb-1">Out of Stock</p>
                            <p class="text-3xl font-bold text-gray-900">3</p>
                            <p class="text-xs text-gray-500 mt-1">Order pending</p>
                        </div>
                        <span class="material-symbols-outlined text-3xl text-red-600" style="font-size: 40px;">cancel</span>
                    </div>
                </div>
            </div>
            
            <!-- Category Breakdown -->
            <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">
                <h3 class="font-semibold text-gray-900 mb-4 flex items-center gap-2">
                    <span class="material-symbols-outlined">category</span>
                    Inventory by Category
                </h3>
                <div class="space-y-4">
                    <!-- Screens Category -->
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <p class="font-medium text-gray-900">Display Screens</p>
                            <p class="text-sm text-gray-600">45 / 50 items</p>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-green-600 h-2 rounded-full" style="width: 90%"></div>
                        </div>
                    </div>
                    
                    <!-- Batteries Category -->
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <p class="font-medium text-gray-900">Batteries & Chargers</p>
                            <p class="text-sm text-gray-600">28 / 40 items</p>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-yellow-600 h-2 rounded-full" style="width: 70%"></div>
                        </div>
                    </div>
                    
                    <!-- Tools Category -->
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <p class="font-medium text-gray-900">Tools & Equipment</p>
                            <p class="text-sm text-gray-600">35 / 35 items</p>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-green-600 h-2 rounded-full" style="width: 100%"></div>
                        </div>
                    </div>
                    
                    <!-- Parts Category -->
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <p class="font-medium text-gray-900">Replacement Parts</p>
                            <p class="text-sm text-gray-600">12 / 30 items</p>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-red-600 h-2 rounded-full" style="width: 40%"></div>
                        </div>
                    </div>
                    
                    <!-- Accessories Category -->
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <p class="font-medium text-gray-900">Accessories</p>
                            <p class="text-sm text-gray-600">8 / 15 items</p>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-orange-600 h-2 rounded-full" style="width: 53%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
