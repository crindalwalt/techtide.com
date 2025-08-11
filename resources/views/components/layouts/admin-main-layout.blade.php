<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogging Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom styles can go here if needed */
        .sidebar {
            transition: transform 0.3s ease-in-out;
            transform: translateX(-100%);
        }
        .sidebar.open {
            transform: translateX(0);
        }
        @media (min-width: 768px) {
            .sidebar {
                transform: translateX(0) !important;
            }
        }
    </style>
</head>
<body class="bg-gray-100 font-sans">

    <div class="flex flex-col md:flex-row min-h-screen">
        {{-- sidebar --}}
        <aside id="sidebar" class="sidebar fixed inset-y-0 left-0 z-50 w-64 bg-white p-4 border-r border-gray-200 shadow-lg md:relative md:translate-x-0">
            <div class="flex items-center justify-between mb-8">
                <a href="{{ route("dashboard") }}" class="text-2xl font-bold text-gray-800">
                    Your Blog
                </a>
                <button id="close-sidebar" class="md:hidden text-gray-500 hover:text-gray-700">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <nav>
                <ul>
                    <li class="mb-4">
                        <a href="{{ route("dashboard") }}" class="flex items-center p-3 rounded-lg text-gray-600 hover:bg-gray-100 hover:text-gray-900 transition-colors duration-200">
                            <svg class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="{{ route("admin.blog.list") }}" class="flex items-center p-3 rounded-lg text-gray-600 hover:bg-gray-100 hover:text-gray-900 transition-colors duration-200">
                            <svg class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a1.25 1.25 0 011.768 1.768l-2.732 2.732m-3.536 3.536L12 18l-7.778-7.778a4 4 0 015.656-5.656L15.232 5.232z"/></svg>
                            <span>My Posts</span>
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="{{ route("admin.blog.create") }}" class="flex items-center p-3 rounded-lg text-gray-600 hover:bg-gray-100 hover:text-gray-900 transition-colors duration-200">
                            <svg class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                            <span>New Post</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-3 rounded-lg text-gray-600 hover:bg-gray-100 hover:text-gray-900 transition-colors duration-200">
                            <svg class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37a1.724 1.724 0 002.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            <span>Settings</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>

        <div class="flex-1 flex flex-col">
            {{-- header --}}
            <header class="bg-white p-4 flex items-center justify-between border-b border-gray-200">
                <button id="open-sidebar" class="md:hidden text-gray-500 hover:text-gray-700">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
                <h1 class="text-xl font-semibold text-gray-800">Dashboard</h1>
                <div class="flex items-center space-x-4">
                    <span class="text-sm text-gray-600 hidden md:block">John Doe</span>
                    <img class="h-8 w-8 rounded-full object-cover" src="https://via.placeholder.com/150" alt="Profile picture">
                </div>
            </header>
            {{ $slot }}
        </div>
    </div>

    <script src="script.js"></script>

</body>
</html>
