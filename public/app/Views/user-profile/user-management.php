<?php
// User Management Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management | User</title>
    
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
    <?php include '../partials/sidebar-user.php'; ?>
    
    <main class="transition-all duration-300">
        <div class="max-w-4xl mx-auto px-4 md:px-6 lg:px-8 py-8">
            <div class="mb-8">
                <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2 flex items-center gap-2">
                    <span class="material-symbols-outlined">group</span>
                    User Management
                </h1>
                <p class="text-gray-600">Manage connected accounts and family members.</p>
            </div>
            
            <div class="space-y-6">
                <!-- Add User Section -->
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6 md:p-8">
                    <h3 class="font-semibold text-gray-900 mb-4 flex items-center gap-2 text-lg">
                        <span class="material-symbols-outlined">person_add</span>
                        Add Family Member
                    </h3>
                    <div class="space-y-4">
                        <input type="email" placeholder="Email address" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option>Select relationship</option>
                            <option>Family</option>
                            <option>Friend</option>
                            <option>Co-worker</option>
                        </select>
                        <button class="w-full px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors font-medium">Add User</button>
                    </div>
                </div>
                
                <!-- Connected Accounts Section -->
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-200 bg-gray-50">
                        <h3 class="font-semibold text-gray-900 flex items-center gap-2">
                            <span class="material-symbols-outlined">people</span>
                            Connected Accounts
                        </h3>
                    </div>
                    <div class="divide-y divide-gray-200">
                        <div class="px-6 py-4 flex items-center justify-between hover:bg-gray-50 transition-colors">
                            <div class="flex items-center gap-4">
                                <img src="https://via.placeholder.com/40" alt="User" class="w-10 h-10 rounded-full bg-gray-300">
                                <div>
                                    <p class="font-medium text-gray-900">Jane Doe</p>
                                    <p class="text-sm text-gray-500">jane.doe@example.com</p>
                                </div>
                            </div>
                            <button class="text-red-600 hover:text-red-700 font-medium text-sm">Remove</button>
                        </div>
                        <div class="px-6 py-4 flex items-center justify-between hover:bg-gray-50 transition-colors">
                            <div class="flex items-center gap-4">
                                <img src="https://via.placeholder.com/40" alt="User" class="w-10 h-10 rounded-full bg-gray-300">
                                <div>
                                    <p class="font-medium text-gray-900">Mike Johnson</p>
                                    <p class="text-sm text-gray-500">mike.j@example.com</p>
                                </div>
                            </div>
                            <button class="text-red-600 hover:text-red-700 font-medium text-sm">Remove</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
