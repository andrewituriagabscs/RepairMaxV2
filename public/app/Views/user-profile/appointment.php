<?php
// Appointment Details Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Details | User</title>
    
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
            <a href="javascript:history.back()" class="text-blue-600 hover:text-blue-700 font-medium flex items-center gap-1 mb-6">
                <span class="material-symbols-outlined text-sm">arrow_back</span>
                Back
            </a>
            
            <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6 md:p-8">
                <div class="flex justify-between items-start mb-6">
                    <div>
                        <h1 class="text-3xl md:text-4xl font-bold text-gray-900">iPhone 14 Pro - Screen Replacement</h1>
                        <p class="text-gray-600 mt-2">Appointment #APP-2026-001234</p>
                    </div>
                    <span class="inline-flex items-center gap-1 px-3 py-1 bg-green-100 text-green-700 rounded-full text-sm font-medium">
                        <span class="material-symbols-outlined">check_circle</span>
                        Completed
                    </span>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-gray-900 mb-3 flex items-center gap-2">
                            <span class="material-symbols-outlined">calendar_today</span>
                            Date & Time
                        </h3>
                        <p class="text-gray-600">February 25, 2026</p>
                        <p class="font-semibold text-gray-900">10:00 AM - 11:30 AM</p>
                    </div>
                    
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-gray-900 mb-3 flex items-center gap-2">
                            <span class="material-symbols-outlined">attach_money</span>
                            Cost
                        </h3>
                        <p class="text-gray-600">Service Fee</p>
                        <p class="font-semibold text-gray-900">$299.00</p>
                    </div>
                    
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-gray-900 mb-3 flex items-center gap-2">
                            <span class="material-symbols-outlined">person</span>
                            Technician
                        </h3>
                        <p class="text-gray-600">John Smith</p>
                        <p class="text-sm text-gray-500">Senior Technician</p>
                    </div>
                    
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-gray-900 mb-3 flex items-center gap-2">
                            <span class="material-symbols-outlined">info</span>
                            Status
                        </h3>
                        <p class="text-gray-600">Warranty</p>
                        <p class="font-semibold text-gray-900">90 Days</p>
                    </div>
                </div>
                
                <div class="border-t pt-6 mb-6">
                    <h3 class="font-semibold text-gray-900 mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined">description</span>
                        Details
                    </h3>
                    <p class="text-gray-600 mb-4">The phone screen was successfully replaced with an original OEM display. Device has been tested and is functioning properly. 90-day warranty included.</p>
                </div>
                
                <!-- Services Performed -->
                <div class="border-t pt-6 mb-6">
                    <h3 class="font-semibold text-gray-900 mb-4 flex items-center gap-2">
                        <span class="material-symbols-outlined">work</span>
                        Services Performed
                    </h3>
                    <div class="space-y-2">
                        <div class="flex justify-between py-2 border-b">
                            <span class="text-gray-600">Screen Replacement (OEM)</span>
                            <span class="font-medium text-gray-900">$299</span>
                        </div>
                        <div class="flex justify-between py-2">
                            <span class="text-gray-600">Diagnostic Fee</span>
                            <span class="font-medium text-gray-900">Waived</span>
                        </div>
                    </div>
                </div>
                
                <!-- Action Buttons -->
                <div class="border-t pt-6 flex gap-4">
                    <button class="flex-1 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors font-medium flex items-center justify-center gap-2">
                        <span class="material-symbols-outlined text-sm">download</span>
                        Download Receipt
                    </button>
                    <button class="flex-1 px-4 py-2 bg-gray-100 text-gray-900 rounded-lg hover:bg-gray-200 transition-colors font-medium flex items-center justify-center gap-2">
                        <span class="material-symbols-outlined text-sm">feedback</span>
                        Leave Feedback
                    </button>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
