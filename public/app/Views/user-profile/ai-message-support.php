<?php
// AI Message Support Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Message Support | User</title>
    
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
        <div class="max-w-2xl mx-auto px-4 md:px-6 lg:px-8 py-8">
            <div class="mb-8">
                <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2 flex items-center gap-2">
                    <span class="material-symbols-outlined">smart_toy</span>
                    AI Support Assistant
                </h1>
                <p class="text-gray-600">Chat with our AI support assistant for help.</p>
            </div>
            
            <div class="bg-white rounded-xl border border-gray-200 shadow-sm flex flex-col h-96 md:h-[500px] lg:h-[600px]">
                <div class="flex-1 overflow-y-auto p-6 space-y-4">
                    <!-- AI Message -->
                    <div class="flex gap-4">
                        <div class="flex-shrink-0">
                            <div class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center">
                                <span class="material-symbols-outlined text-white text-sm">smart_toy</span>
                            </div>
                        </div>
                        <div class="bg-blue-100 rounded-lg p-4 max-w-xs">
                            <p class="text-sm text-gray-900">Hello! How can I assist you with your device repair today?</p>
                            <p class="text-xs text-gray-500 mt-2">10:30 AM</p>
                        </div>
                    </div>
                    
                    <!-- User Message -->
                    <div class="flex gap-4 justify-end">
                        <div class="bg-gray-200 rounded-lg p-4 max-w-xs">
                            <p class="text-sm text-gray-900">My iPhone screen is cracked. Can you help?</p>
                            <p class="text-xs text-gray-500 mt-2">10:32 AM</p>
                        </div>
                    </div>
                    
                    <!-- AI Message -->
                    <div class="flex gap-4">
                        <div class="flex-shrink-0">
                            <div class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center">
                                <span class="material-symbols-outlined text-white text-sm">smart_toy</span>
                            </div>
                        </div>
                        <div class="bg-blue-100 rounded-lg p-4 max-w-xs">
                            <p class="text-sm text-gray-900">Yes! We can definitely help with that. iPhone screen repairs typically take 1-2 hours and cost $199-$349 depending on the model. Would you like to book an appointment?</p>
                            <p class="text-xs text-gray-500 mt-2">10:33 AM</p>
                        </div>
                    </div>
                    
                    <!-- User Message -->
                    <div class="flex gap-4 justify-end">
                        <div class="bg-gray-200 rounded-lg p-4 max-w-xs">
                            <p class="text-sm text-gray-900">Sure! Can I book for tomorrow?</p>
                            <p class="text-xs text-gray-500 mt-2">10:35 AM</p>
                        </div>
                    </div>
                    
                    <!-- AI Message -->
                    <div class="flex gap-4">
                        <div class="flex-shrink-0">
                            <div class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center">
                                <span class="material-symbols-outlined text-white text-sm">smart_toy</span>
                            </div>
                        </div>
                        <div class="bg-blue-100 rounded-lg p-4 max-w-xs">
                            <p class="text-sm text-gray-900">Absolutely! We have availability at 2:00 PM tomorrow. Does that work for you?</p>
                            <p class="text-xs text-gray-500 mt-2">10:36 AM</p>
                        </div>
                    </div>
                </div>
                
                <div class="border-t p-4 flex gap-2">
                    <input type="text" placeholder="Type your message..." class="flex-1 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <button class="p-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                        <span class="material-symbols-outlined">send</span>
                    </button>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
