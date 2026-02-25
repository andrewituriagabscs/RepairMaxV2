<?php
// User Inventory Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory | User</title>
    
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
        <div class="max-w-6xl mx-auto px-4 md:px-6 lg:px-8 py-8">
            <div class="mb-8">
                <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2 flex items-center gap-2">
                    <span class="material-symbols-outlined">inventory_2</span>
                    Your Inventory
                </h1>
                <p class="text-gray-600">Manage your devices and repair history.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6 hover:shadow-md transition-shadow">
                    <div class="bg-blue-100 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                        <span class="material-symbols-outlined text-blue-600">smartphone</span>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">iPhone 14 Pro</h3>
                    <p class="text-sm text-gray-600 mb-4">Space Black • 256GB • Very Good</p>
                    <div class="text-xs text-gray-500">Last repair: Feb 25, 2026</div>
                </div>
                
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6 hover:shadow-md transition-shadow">
                    <div class="bg-green-100 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                        <span class="material-symbols-outlined text-green-600">smartphone</span>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Samsung Galaxy S23</h3>
                    <p class="text-sm text-gray-600 mb-4">Phantom Black • 256GB • Excellent</p>
                    <div class="text-xs text-gray-500">Under repair</div>
                </div>
                
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6 hover:shadow-md transition-shadow">
                    <div class="bg-purple-100 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                        <span class="material-symbols-outlined text-purple-600">tablet</span>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">iPad Air 5</h3>
                    <p class="text-sm text-gray-600 mb-4">Space Gray • 256GB • Good</p>
                    <div class="text-xs text-gray-500">Last repair: Feb 23, 2026</div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
