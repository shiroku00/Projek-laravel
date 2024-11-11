<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sidebar Example</title>
<link rel="stylesheet" href="https://code.iconify.design/2/2.1.2/iconify.min.js">
<style>
    /* General Styles */
    body {
        font-family: Arial, sans-serif;
    }

    /* Sidebar and Navbar Styling */
    .bg-gray-800 { background-color: #2D3748; }
    .text-gray-300 { color: #CBD5E0; }
    .text-gray-700 { color: #4A5568; }
    .text-gray-500 { color: #A0AEC0; }
    .text-white { color: #FFFFFF; }
    .bg-white { background-color: #FFFFFF; }

    /* Mobile Navbar */
    #navbar {
        background-color: #2D3748;
        color: #CBD5E0;
        width: 100%;
        height: 4rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 1rem;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 10;
    }

    /* Sidebar Styling */
    #sidebar {
        background-color: #2D3748;
        color: #CBD5E0;
        width: 16rem;
        height: 100vh;
        padding: 1.5rem;
        display: flex;
        flex-direction: column;
        align-items: center;
        position: fixed;
        left: 0;
        top: 0;
        z-index: 5;
    }

    /* Popup Sidebar Styling */
    #popup-sidebar {
        background-color: #FFFFFF;
        color: #2D3748;
        width: 16rem;
        height: 100vh;
        position: fixed;
        left: 0;
        top: 0;
        z-index: 20;
        transform: translateX(-100%);
        transition: transform 0.3s ease;
    }

    #popup-sidebar:not(.hidden) {
        transform: translateX(0);
    }

    /* Shared Profile Bubble Styling */
    #profile-bubble {
        background-color: #4A5568;
        color: #CBD5E0;
        position: absolute;
        padding: 1rem;
        border-radius: 0.5rem;
        width: 14rem;
        display: none; /* Initially hidden */
        z-index: 15;
    }

    /* Responsive Design */
    @media (max-width: 790px) {
        #sidebar {
            display: none; /* Hide sidebar on mobile */
        }
        #navbar {
            display: flex; /* Show navbar on mobile */
        }
    }
    @media (min-width: 791px) {
        #navbar {
            display: none; /* Hide navbar on larger screens */
        }
        #sidebar {
            display: flex; /* Show sidebar on larger screens */
        }
    }
</style>
</head>
<body class="bg-gray-900 flex flex-col" onclick="closeProfileBubble(event)">

    <!-- Navbar for Mobile -->
    <nav id="navbar" class="bg-gray-800 text-gray-300 flex items-center justify-between px-4">
        <div class="flex items-center space-x-2">
            <div class="w-8 h-8 bg-gray-500 rounded-full"></div> <!-- Profile Picture -->
            <span class="iconify text-gray-500 cursor-pointer" data-icon="ic:baseline-settings" data-inline="false" onclick="toggleProfileBubble(event, 'navbar')"></span>
        </div>
        <span class="iconify text-gray-500 cursor-pointer" data-icon="ic:outline-menu" data-inline="false" onclick="togglePopupSidebar()"></span> <!-- Hamburger Menu -->
    </nav>

    <!-- Profile Edit Bubble (Shared) -->
    <div id="profile-bubble" onclick="event.stopPropagation()">
        <h3 class="text-white text-sm font-semibold mb-2">Edit Profile</h3>
        <label class="text-gray-300 text-xs">Name</label>
        <input type="text" class="w-full mt-1 mb-3 p-2 rounded bg-gray-600 text-gray-300 focus:outline-none" placeholder="Enter new name">
        <label class="text-gray-300 text-xs">Profile Picture</label>
        <input type="file" class="w-full mt-1 mb-3 p-2 rounded bg-gray-600 text-gray-300 focus:outline-none">
        <button class="w-full mt-3 bg-blue-600 text-white p-2 rounded hover:bg-blue-500">Save Changes</button>
    </div>

    <!-- Main Sidebar -->
    <div id="sidebar" class="bg-gray-800 text-gray-300 hidden md:block">
        <div class="absolute top-4 left-4">
            <span class="iconify text-gray-500 cursor-pointer" data-icon="ic:baseline-settings" data-inline="false" onclick="toggleProfileBubble(event, 'sidebar')"></span>
        </div>
        <div class="w-20 h-20 bg-gray-500 rounded-full mt-10 mb-4"></div>
        <p class="text-gray-300 font-semibold text-lg">asep</p>
        <nav class="mt-6 w-full">
            <ul class="space-y-6">
                <li class="flex items-center space-x-2 cursor-pointer hover:text-white">
                    <span class="iconify" data-icon="ic:outline-dashboard" data-inline="false"></span>
                    <a href="{{ route('admin.dashboard') }}">   <span class="text-sm font-medium">Dashboard</span></a> 
                </li>
                <li class="flex items-center space-x-2 cursor-pointer hover:text-white">
                    <span class="iconify" data-icon="ic:baseline-account-circle" data-inline="false"></span>
                  <a href="{{ route('admin.pelanggan') }}"> <span class="text-sm font-medium">Pelanggan</span></a> 
                </li>
                <li class="flex items-center space-x-2 cursor-pointer hover:text-white">
                    <span class="iconify" data-icon="fluent:wrench-16-filled" data-inline="false"></span>
                    <span class="text-sm font-medium">Perbaikan</span>
                </li>
                <li class="flex items-center space-x-2 cursor-pointer hover:text-white">
                    <span class="iconify" data-icon="game-icons:confirmed" data-inline="false"></span>
                    <span class="text-sm font-medium">Konfirmasi Perbaikan</span>
                </li>
                <!-- Dropdown for Laporan -->
                <li class="relative">
                    <div class="flex items-center space-x-2 cursor-pointer hover:text-white" onclick="toggleDropdown(event)">
                        <span class="iconify" data-icon="ic:outline-assignment" data-inline="false"></span>
                        <span class="text-sm font-medium">Laporan</span>
                        <span class="iconify ml-auto" data-icon="ic:baseline-keyboard-arrow-down" data-inline="false"></span>
                    </div>
                    <ul id="dropdown-menu" class="bg-gray-700 rounded-lg text-sm text-gray-300 w-full mt-2 hidden">
                        <li class="px-4 py-2 hover:bg-gray-600 cursor-pointer">Laporan Keuangan</li>
                        <li class="px-4 py-2 hover:bg-gray-600 cursor-pointer">Laporan Kendaraan</li>
                        <li class="px-4 py-2 hover:bg-gray-600 cursor-pointer">Laporan Pemasukan</li>
                    </ul>
                </li>
                <li class="flex items-center space-x-2 cursor-pointer hover:text-white">
                    <span class="iconify" data-icon="ic:baseline-logout" data-inline="false"></span>
                    <span class="text-sm font-medium">Logout</span>
                </li>
            </ul>
        </nav>
    </div>

    <!-- Popup Sidebar (for mobile navigation) -->
    <div id="popup-sidebar" class="hidden">
        <div class="flex justify-between items-center p-4 border-b">
            <h2 class="text-lg font-semibold">Navigation</h2>
            <span class="iconify cursor-pointer text-gray-500" data-icon="ic:baseline-close" data-inline="false" onclick="togglePopupSidebar()"></span>
        </div>
        <nav class="mt-4">
            <ul class="space-y-4 px-4">
                <li class="text-gray-700 text-sm font-medium cursor-pointer">Dashboard</li>
                <li class="text-gray-700 text-sm font-medium cursor-pointer">Pelanggan</li>
                <li class="text-gray-700 text-sm font-medium cursor-pointer">Laporan</li>
                <li class="text-gray-700 text-sm font-medium cursor-pointer">Settings</li>
                <li class="text-gray-700 text-sm font-medium cursor-pointer">Logout</li>
            </ul>
        </nav>
    </div>

    <!-- JavaScript for Dropdown, Profile Bubble, and Sidebar -->
    <script>
        function toggleDropdown(event) {
            const dropdownMenu = document.getElementById("dropdown-menu");
            dropdownMenu.classList.toggle("hidden");
        }

        // Toggle Popup Sidebar for mobile navigation
        function togglePopupSidebar() {
            const popupSidebar = document.getElementById("popup-sidebar");
            popupSidebar.classList.toggle("hidden");
            closeProfileBubble(); // Close profile bubble when toggling popup sidebar
        }

        // Toggle Profile Edit Bubble
        function toggleProfileBubble(event, source) {
            event.stopPropagation();
            const bubble = document.getElementById("profile-bubble");

            // Set the position based on source (navbar or sidebar)
            if (source === 'navbar') {
                bubble.style.top = '4rem';
                bubble.style.left = '1rem';
            } else if (source === 'sidebar') {
                bubble.style.top = '6rem';
                bubble.style.left = '18rem';
            }

            // Toggle visibility
            bubble.style.display = bubble.style.display === 'block' ? 'none' : 'block';
        }

        // Close Profile Bubble on Outside Click
        function closeProfileBubble(event) {
            const bubble = document.getElementById("profile-bubble");
            if (bubble && bubble.style.display === "block" && (!event || !bubble.contains(event.target))) {
                bubble.style.display = "none";
            }
        }

        // Automatically close profile bubble on window resize (if transitioning from sidebar to navbar)
        window.addEventListener('resize', () => {
            closeProfileBubble();
        });
    </script>
</body>
</html>
