<?php
// Upcoming Appointments Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upcoming Appointments | User</title>
    
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
                <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2">Upcoming Appointments</h1>
                <p class="text-gray-600">Your scheduled repair appointments.</p>
            </div>
            
            <div class="space-y-4">
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6 hover:shadow-md transition-shadow">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <h3 class="text-lg font-bold text-gray-900">Samsung Galaxy S23 - Battery Replacement</h3>
                            <p class="text-gray-600 text-sm mt-1">Scheduled for Feb 26, 2026 at 2:00 PM</p>
                        </div>
                        <span class="inline-flex items-center gap-1 px-3 py-1 bg-orange-100 text-orange-700 rounded-full text-xs font-medium">
                            <span class="material-symbols-outlined text-sm">schedule</span>
                            In Progress
                        </span>
                    </div>
                    <div class="grid grid-cols-3 gap-4 text-sm">
                        <div>
                            <p class="text-gray-600">Estimated Cost</p>
                            <p class="font-bold text-gray-900">$89</p>
                        </div>
                        <div>
                            <p class="text-gray-600">Estimated Time</p>
                            <p class="font-bold text-gray-900">1 hour</p>
                        </div>
                        <div>
                            <p class="text-gray-600">Technician</p>
                            <p class="font-bold text-gray-900">Jane Smith</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6 hover:shadow-md transition-shadow">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <h3 class="text-lg font-bold text-gray-900">Google Pixel 7 - Camera Repair</h3>
                            <p class="text-gray-600 text-sm mt-1">Scheduled for Feb 27, 2026 at 10:00 AM</p>
                        </div>
                        <span class="inline-flex items-center gap-1 px-3 py-1 bg-purple-100 text-purple-700 rounded-full text-xs font-medium">
                            <span class="material-symbols-outlined text-sm">pending_actions</span>
                            Pending
                        </span>
                    </div>
                    <div class="grid grid-cols-3 gap-4 text-sm">
                        <div>
                            <p class="text-gray-600">Estimated Cost</p>
                            <p class="font-bold text-gray-900">$149</p>
                        </div>
                        <div>
                            <p class="text-gray-600">Estimated Time</p>
                            <p class="font-bold text-gray-900">2 hours</p>
                        </div>
                        <div>
                            <p class="text-gray-600">Technician</p>
                            <p class="font-bold text-gray-900">Pending Assignment</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
