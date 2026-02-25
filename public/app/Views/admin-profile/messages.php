<?php
// Messages Page (Admin)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages | Admin</title>
    
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
        <div class="max-w-4xl mx-auto px-4 md:px-6 lg:px-8 py-8">
            <div class="mb-8">
                <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2 flex items-center gap-2">
                    <span class="material-symbols-outlined">mail</span>
                    Messages
                </h1>
                <p class="text-gray-600">View and manage system messages.</p>
            </div>
            
            <!-- Filter Bar -->
            <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-4 mb-6">
                <div class="flex gap-4">
                    <select class="flex-1 border border-gray-200 rounded-lg px-3 py-2 text-sm">
                        <option>All Messages</option>
                        <option>Unread</option>
                        <option>Read</option>
                        <option>Archived</option>
                    </select>
                    <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors text-sm font-medium">
                        <span class="material-symbols-outlined inline mr-1" style="font-size: 18px;">search</span>
                        Search
                    </button>
                </div>
            </div>
            
            <!-- Messages List -->
            <div class="space-y-2">
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-4 hover:shadow-md transition-shadow cursor-pointer">
                    <div class="flex items-start justify-between">
                        <div class="flex-1">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="w-10 h-10 bg-blue-600 rounded-full text-white flex items-center justify-center font-bold text-sm">JD</div>
                                <div>
                                    <p class="font-semibold text-gray-900">Jane Doe</p>
                                    <p class="text-xs text-gray-500">2 hours ago</p>
                                </div>
                            </div>
                            <p class="text-sm text-gray-900 font-medium mb-1">Appointment Confirmation</p>
                            <p class="text-sm text-gray-600">Can you confirm my appointment on March 1st at 2:00 PM?</p>
                        </div>
                        <span class="material-symbols-outlined text-gray-400">mail</span>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-4 hover:shadow-md transition-shadow cursor-pointer bg-blue-50">
                    <div class="flex items-start justify-between">
                        <div class="flex-1">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="w-10 h-10 bg-green-600 rounded-full text-white flex items-center justify-center font-bold text-sm">MJ</div>
                                <div>
                                    <p class="font-semibold text-gray-900">Mike Johnson</p>
                                    <p class="text-xs text-gray-500">4 hours ago</p>
                                </div>
                            </div>
                            <p class="text-sm text-gray-900 font-medium mb-1">Repair Status Update</p>
                            <p class="text-sm text-gray-600">Is my phone repair completed? When can I pick it up?</p>
                        </div>
                        <span class="material-symbols-outlined text-blue-600">mail_unread</span>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-4 hover:shadow-md transition-shadow cursor-pointer">
                    <div class="flex items-start justify-between">
                        <div class="flex-1">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="w-10 h-10 bg-orange-600 rounded-full text-white flex items-center justify-center font-bold text-sm">EW</div>
                                <div>
                                    <p class="font-semibold text-gray-900">Emma Wilson</p>
                                    <p class="text-xs text-gray-500">6 hours ago</p>
                                </div>
                            </div>
                            <p class="text-sm text-gray-900 font-medium mb-1">Warranty Question</p>
                            <p class="text-sm text-gray-600">Does the warranty cover accidental damage to the screen?</p>
                        </div>
                        <span class="material-symbols-outlined text-gray-400">mail</span>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-4 hover:shadow-md transition-shadow cursor-pointer">
                    <div class="flex items-start justify-between">
                        <div class="flex-1">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="w-10 h-10 bg-pink-600 rounded-full text-white flex items-center justify-center font-bold text-sm">RD</div>
                                <div>
                                    <p class="font-semibold text-gray-900">Robert Davis</p>
                                    <p class="text-xs text-gray-500">1 day ago</p>
                                </div>
                            </div>
                            <p class="text-sm text-gray-900 font-medium mb-1">Feedback on Service</p>
                            <p class="text-sm text-gray-600">Great service! Thanks for the quick turnaround on my MacBook repair.</p>
                        </div>
                        <span class="material-symbols-outlined text-gray-400">mail</span>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
