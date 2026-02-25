<?php
// User Reports Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports | User</title>
    
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
                    <span class="material-symbols-outlined">assessment</span>
                    Reports
                </h1>
                <p class="text-gray-600">View your repair statistics and reports.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6 hover:shadow-md transition-shadow">
                    <div class="flex items-center justify-between mb-4">
                        <p class="text-gray-600 text-sm font-medium whitespace-nowrap">Total Repairs</p>
                        <span class="material-symbols-outlined text-blue-600 text-2xl flex-shrink-0 ml-2">build</span>
                    </div>
                    <p class="text-3xl font-bold text-gray-900">12</p>
                    <p class="text-xs text-gray-500 mt-2">2 this month</p>
                </div>
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6 hover:shadow-md transition-shadow">
                    <div class="flex items-center justify-between mb-4">
                        <p class="text-gray-600 text-sm font-medium whitespace-nowrap">Total Spent</p>
                        <span class="material-symbols-outlined text-green-600 text-2xl flex-shrink-0 ml-2">attach_money</span>
                    </div>
                    <p class="text-3xl font-bold text-gray-900">$1,234</p>
                    <p class="text-xs text-gray-500 mt-2">Avg: $102.83 per repair</p>
                </div>
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6 hover:shadow-md transition-shadow">
                    <div class="flex items-center justify-between mb-4">
                        <p class="text-gray-600 text-sm font-medium whitespace-nowrap">Satisfaction Rate</p>
                        <span class="material-symbols-outlined text-yellow-600 text-2xl flex-shrink-0 ml-2">star</span>
                    </div>
                    <p class="text-3xl font-bold text-gray-900">98%</p>
                    <p class="text-xs text-gray-500 mt-2">Highly satisfied</p>
                </div>
            </div>
            
            <!-- Report Breakdown Table -->
            <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
                <div class="px-6 py-4 border-b border-gray-200 bg-gray-50">
                    <h3 class="font-semibold text-gray-900 flex items-center gap-2">
                        <span class="material-symbols-outlined">assessment</span>
                        Monthly Statistics
                    </h3>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gray-50 border-b border-gray-200">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Month</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Repairs</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Spent</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Avg Cost</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-3 text-sm text-gray-900">February 2026</td>
                                <td class="px-6 py-3 text-sm text-gray-600">2</td>
                                <td class="px-6 py-3 text-sm font-medium text-gray-900">$388</td>
                                <td class="px-6 py-3 text-sm text-gray-600">$194</td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-3 text-sm text-gray-900">January 2026</td>
                                <td class="px-6 py-3 text-sm text-gray-600">3</td>
                                <td class="px-6 py-3 text-sm font-medium text-gray-900">$486</td>
                                <td class="px-6 py-3 text-sm text-gray-600">$162</td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-3 text-sm text-gray-900">December 2025</td>
                                <td class="px-6 py-3 text-sm text-gray-600">4</td>
                                <td class="px-6 py-3 text-sm font-medium text-gray-900">$360</td>
                                <td class="px-6 py-3 text-sm text-gray-600">$90</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
