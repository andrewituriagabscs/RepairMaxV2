<?php
// Sidebar Navigation for Admin Dashboard
// This sidebar is responsive: visible on desktop, hidden on mobile with hamburger toggle
?>

<!-- Sidebar Navigation -->
<aside id="admin-sidebar" class="fixed left-0 top-0 h-screen w-64 bg-gray-900 border-r border-gray-800 transform lg:translate-x-0 transition-transform duration-300 ease-in-out z-40 overflow-y-auto scrollbar-hide" style="transform: translateX(0);">
    
    <!-- Sidebar Header with Logo -->
    <div class="sticky top-0 bg-gray-900 border-b border-gray-800 p-4 z-50">
        <a href="../../../index.php" class="text-2xl font-bold text-white hover:text-gray-300 transition-colors">
            Repairmax
        </a>
    </div>

    <!-- Navigation Menu -->
    <nav class="px-4 py-6 space-y-2">
        
        <!-- Dashboard Section -->
        <div class="mb-8">
            <h3 class="px-4 py-2 text-xs font-semibold text-gray-500 uppercase tracking-wider mb-3">Main</h3>
            
            <a href="dashboard.php" class="sidebar-link flex items-center gap-3 px-4 py-3 text-gray-300 hover:text-white hover:bg-gray-800 rounded-lg transition-all duration-200">
                <span class="material-symbols-outlined text-xl">dashboard</span>
                <span>Dashboard</span>
            </a>

            <a href="dashboard-overview.php" class="sidebar-link flex items-center gap-3 px-4 py-3 text-gray-300 hover:text-white hover:bg-gray-800 rounded-lg transition-all duration-200">
                <span class="material-symbols-outlined text-xl">overview</span>
                <span>Overview</span>
            </a>

            <a href="profile.php" class="sidebar-link flex items-center gap-3 px-4 py-3 text-gray-300 hover:text-white hover:bg-gray-800 rounded-lg transition-all duration-200">
                <span class="material-symbols-outlined text-xl">person</span>
                <span>Profile</span>
            </a>
        </div>

        <!-- Appointments Section -->
        <div class="mb-8">
            <h3 class="px-4 py-2 text-xs font-semibold text-gray-500 uppercase tracking-wider mb-3">Appointments</h3>
            
            <a href="appointment.php" class="sidebar-link flex items-center gap-3 px-4 py-3 text-gray-300 hover:text-white hover:bg-gray-800 rounded-lg transition-all duration-200">
                <span class="material-symbols-outlined text-xl">event</span>
                <span>Appointments</span>
            </a>

            <a href="appointment-management.php" class="sidebar-link flex items-center gap-3 px-4 py-3 text-gray-300 hover:text-white hover:bg-gray-800 rounded-lg transition-all duration-200 whitespace-nowrap overflow-hidden">
                <span class="material-symbols-outlined text-xl flex-shrink-0">calendar_month</span>
                <span class="truncate">Management</span>
            </a>
        </div>

        <!-- Inventory Section -->
        <div class="mb-8">
            <h3 class="px-4 py-2 text-xs font-semibold text-gray-500 uppercase tracking-wider mb-3">Inventory</h3>
            
            <a href="inventory.php" class="sidebar-link flex items-center gap-3 px-4 py-3 text-gray-300 hover:text-white hover:bg-gray-800 rounded-lg transition-all duration-200">
                <span class="material-symbols-outlined text-xl">inventory_2</span>
                <span>Inventory</span>
            </a>

            <a href="inventory-management.php" class="sidebar-link flex items-center gap-3 px-4 py-3 text-gray-300 hover:text-white hover:bg-gray-800 rounded-lg transition-all duration-200 whitespace-nowrap overflow-hidden">
                <span class="material-symbols-outlined text-xl flex-shrink-0">inventory_2</span>
                <span class="truncate">Management</span>
            </a>
        </div>

        <!-- User Management Section -->
        <div class="mb-8">
            <h3 class="px-4 py-2 text-xs font-semibold text-gray-500 uppercase tracking-wider mb-3">Users</h3>
            
            <a href="user-management.php" class="sidebar-link flex items-center gap-3 px-4 py-3 text-gray-300 hover:text-white hover:bg-gray-800 rounded-lg transition-all duration-200">
                <span class="material-symbols-outlined text-xl">group</span>
                <span>User Management</span>
            </a>
        </div>

        <!-- Messages Section -->
        <div class="mb-8">
            <h3 class="px-4 py-2 text-xs font-semibold text-gray-500 uppercase tracking-wider mb-3">Communications</h3>
            
            <a href="messages.php" class="sidebar-link flex items-center gap-3 px-4 py-3 text-gray-300 hover:text-white hover:bg-gray-800 rounded-lg transition-all duration-200">
                <span class="material-symbols-outlined text-xl">mail</span>
                <span>Messages</span>
            </a>

            <a href="messages-support.php" class="sidebar-link flex items-center gap-3 px-4 py-3 text-gray-300 hover:text-white hover:bg-gray-800 rounded-lg transition-all duration-200">
                <span class="material-symbols-outlined text-xl">support_agent</span>
                <span>Support</span>
            </a>
        </div>

        <!-- Reports Section -->
        <div class="mb-8">
            <h3 class="px-4 py-2 text-xs font-semibold text-gray-500 uppercase tracking-wider mb-3">Reports</h3>
            
            <a href="reports.php" class="sidebar-link flex items-center gap-3 px-4 py-3 text-gray-300 hover:text-white hover:bg-gray-800 rounded-lg transition-all duration-200">
                <span class="material-symbols-outlined text-xl">description</span>
                <span>Reports</span>
            </a>

            <a href="reports-analytics.php" class="sidebar-link flex items-center gap-3 px-4 py-3 text-gray-300 hover:text-white hover:bg-gray-800 rounded-lg transition-all duration-200">
                <span class="material-symbols-outlined text-xl">analytics</span>
                <span>Analytics</span>
            </a>
        </div>

        <!-- Settings Section -->
        <div>
            <h3 class="px-4 py-2 text-xs font-semibold text-gray-500 uppercase tracking-wider mb-3">Settings</h3>
            
            <a href="settings.php" class="sidebar-link flex items-center gap-3 px-4 py-3 text-gray-300 hover:text-white hover:bg-gray-800 rounded-lg transition-all duration-200">
                <span class="material-symbols-outlined text-xl">tune</span>
                <span>Settings</span>
            </a>

            <a href="system-settings.php" class="sidebar-link flex items-center gap-3 px-4 py-3 text-gray-300 hover:text-white hover:bg-gray-800 rounded-lg transition-all duration-200">
                <span class="material-symbols-outlined text-xl">settings</span>
                <span>System</span>
            </a>

            <a href="../auth/login.php" class="sidebar-link flex items-center gap-3 px-4 py-3 text-gray-300 hover:text-white hover:bg-red-900/30 rounded-lg transition-all duration-200">
                <span class="material-symbols-outlined text-xl">logout</span>
                <span>Logout</span>
            </a>
        </div>

    </nav>

</aside>

<!-- Mobile Overlay -->
<div id="sidebar-overlay" class="fixed inset-0 bg-black/50 hidden lg:hidden z-30 transition-opacity duration-300"></div>

<!-- Top Navigation Bar for Dashboard Pages -->
<header class="fixed top-0 right-0 left-0 bg-white border-b border-gray-200 z-30 transition-all duration-300 h-20" style="left: 256px;">
    <div class="flex items-center justify-between px-4 md:px-6 h-full">
        
        <!-- Mobile Hamburger Menu (for opening sidebar on mobile) -->
        <button id="sidebar-toggle-btn" class="inline-flex items-center justify-center w-12 h-12 p-0 hover:bg-gray-100 rounded-lg transition-colors text-gray-700 active:bg-gray-200">
            <span class="material-symbols-outlined text-[28px]">menu</span>
        </button>

        <!-- Empty Space for Logo on Mobile -->
        <div class="flex-1 lg:hidden"></div>

        <!-- Top Right Icons -->
        <div class="flex items-center gap-2 md:gap-4 ml-auto">
            
            <!-- Notification Bell -->
            <button class="relative p-2 hover:bg-gray-100 rounded-lg transition-colors" aria-label="Notifications">
                <span class="material-symbols-outlined text-2xl text-gray-700">notifications</span>
                <span class="absolute top-1 right-1 w-2 h-2 bg-red-500 rounded-full"></span>
            </button>

            <!-- Account Settings Dropdown -->
            <div class="relative group">
                <button class="p-2 hover:bg-gray-100 rounded-lg transition-colors flex items-center gap-2" aria-label="Account">
                    <span class="material-symbols-outlined text-2xl text-gray-700">account_circle</span>
                </button>
            </div>

            <!-- User Info and Logout (Mobile Hidden) -->
            <div class="hidden md:flex items-center gap-3 ml-2 pl-4 border-l border-gray-200">
                <div class="text-right">
                    <p class="text-sm font-medium text-gray-900">Admin User</p>
                    <p class="text-xs text-gray-500">Administrator</p>
                </div>
                <img src="https://via.placeholder.com/40" alt="Admin Avatar" class="w-10 h-10 rounded-full bg-gray-300">
            </div>

        </div>

    </div>
</header>

<style>
    /* Sidebar Base Styles */
    #admin-sidebar {
        scrollbar-width: none;
        -ms-overflow-style: none;
        transition: transform 0.3s ease-out;
    }
    
    #admin-sidebar::-webkit-scrollbar {
        display: none;
    }

    /* Desktop: Sidebar always visible, can be hidden */
    @media (min-width: 1024px) {
        #admin-sidebar {
            transform: translateX(0);
        }

        #admin-sidebar.hidden {
            transform: translateX(-100%);
        }

        header {
            left: 256px !important;
        }

        header.sidebar-hidden {
            left: 0 !important;
        }

        main {
            margin-left: 256px;
        }

        main.sidebar-hidden {
            margin-left: 0;
        }
    }

    /* Mobile: Sidebar hidden by default, overlays when open */
    @media (max-width: 1024px) {
        #admin-sidebar {
            transform: translateX(-100%);
            width: 256px;
            position: fixed;
            z-index: 40;
        }

        #admin-sidebar.open {
            transform: translateX(0);
        }

        header {
            left: 0 !important;
        }

        main {
            margin-left: 0;
        }
    }
</style>

<script>
    // Sidebar Toggle Functionality
    const sidebarToggleBtn = document.getElementById('sidebar-toggle-btn');
    const adminSidebar = document.getElementById('admin-sidebar');
    const sidebarOverlay = document.getElementById('sidebar-overlay');
    const header = document.querySelector('header');
    const main = document.querySelector('main');

    // Toggle sidebar visibility
    if (sidebarToggleBtn) {
        sidebarToggleBtn.addEventListener('click', () => {
            const isDesktop = window.innerWidth >= 1024;
            
            if (isDesktop) {
                // Desktop: Toggle hidden state
                adminSidebar.classList.toggle('hidden');
                if (header) header.classList.toggle('sidebar-hidden');
                if (main) main.classList.toggle('sidebar-hidden');
            } else {
                // Mobile: Toggle open state
                adminSidebar.classList.toggle('open');
                sidebarOverlay.classList.toggle('hidden');
            }
        });
    }

    // Close sidebar when overlay is clicked
    if (sidebarOverlay) {
        sidebarOverlay.addEventListener('click', () => {
            adminSidebar.classList.remove('open');
            sidebarOverlay.classList.add('hidden');
        });
    }

    // Handle resize: show sidebar on desktop, hide overlay
    window.addEventListener('resize', () => {
        if (window.innerWidth >= 1024) {
            adminSidebar.classList.remove('open');
            sidebarOverlay.classList.add('hidden');
        }
    });

    // Close sidebar when a link is clicked on mobile
    const sidebarLinks = document.querySelectorAll('.sidebar-link');
    sidebarLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (window.innerWidth < 1024) {
                adminSidebar.classList.remove('open');
                sidebarOverlay.classList.add('hidden');
            }
        });
    });

    // Highlight current page
    const currentPath = window.location.pathname;
    sidebarLinks.forEach(link => {
        if (link.getAttribute('href').includes(currentPath.split('/').pop())) {
            link.classList.add('text-white', 'bg-gray-800');
        }
    });
</script>
