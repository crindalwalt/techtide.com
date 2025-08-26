<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Techtide.com - Your Source for Tech Insights</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts - Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f9fafb;
            /* Light gray background */
        }

        /* Custom scrollbar for a cleaner look */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
    </style>
</head>

<body class="text-gray-800">

    <!-- Header Section -->
    <header class="bg-white shadow-sm py-4 px-4 sm:px-6 lg:px-8 rounded-b-lg">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <!-- Logo/Site Title -->
            <a href="#"
                class="text-2xl font-bold text-gray-900 rounded-md p-2 hover:bg-gray-100 transition-colors">techtide.com</a>

            <!-- Navigation (Desktop) -->
            <nav class="hidden md:flex space-x-6">
                <a href="#"
                    class="text-gray-600 hover:text-gray-900 font-medium transition-colors rounded-md p-2 hover:bg-gray-100">Home</a>
                <a href="#"
                    class="text-gray-600 hover:text-gray-900 font-medium transition-colors rounded-md p-2 hover:bg-gray-100">Blog</a>
                <a href="#"
                    class="text-gray-600 hover:text-gray-900 font-medium transition-colors rounded-md p-2 hover:bg-gray-100">About</a>
                <a href="#"
                    class="text-gray-600 hover:text-gray-900 font-medium transition-colors rounded-md p-2 hover:bg-gray-100">Contact</a>
            </nav>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button id="mobile-menu-button"
                    class="text-gray-600 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 rounded-md p-2 hover:bg-gray-100">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu (Hidden by default) -->
        <nav id="mobile-menu" class="hidden md:hidden mt-4 space-y-2">
            <a href="#"
                class="block text-gray-600 hover:text-gray-900 font-medium transition-colors rounded-md p-2 hover:bg-gray-100">Home</a>
            <a href="#"
                class="block text-gray-600 hover:text-gray-900 font-medium transition-colors rounded-md p-2 hover:bg-gray-100">Blog</a>
            <a href="#"
                class="block text-gray-600 hover:text-gray-900 font-medium transition-colors rounded-md p-2 hover:bg-gray-100">About</a>
            <a href="#"
                class="block text-gray-600 hover:text-gray-900 font-medium transition-colors rounded-md p-2 hover:bg-gray-100">Contact</a>
        </nav>
    </header>

    <!-- Hero Section -->
    <section
        class="bg-gradient-to-br from-indigo-600 to-purple-700 text-white py-16 px-4 sm:px-6 lg:px-8 rounded-lg shadow-lg my-8 max-w-7xl mx-auto overflow-hidden relative">
        <div class="max-w-4xl mx-auto text-center relative z-10">
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold leading-tight mb-4 rounded-md">
                Dive Deep into the <span class="text-yellow-300">Future of Tech</span>
            </h1>
            <p class="text-lg sm:text-xl mb-8 opacity-90 rounded-md">
                Your go-to source for insightful articles, breaking news, and in-depth analyses on the latest in
                technology.
            </p>
            <a href="#blog-posts"
                class="inline-block bg-white text-indigo-700 hover:bg-indigo-100 font-semibold py-3 px-8 rounded-full shadow-lg transform hover:scale-105 transition-all duration-300 ease-in-out">
                Explore Articles
            </a>
        </div>
        <!-- Unique Elements (Subtle background patterns/shapes) -->
        <div class="absolute inset-0 z-0 opacity-20">
            <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                <circle cx="20" cy="20" r="15" fill="currentColor" class="text-indigo-400"></circle>
                <rect x="70" y="10" width="20" height="20" fill="currentColor" class="text-purple-400"
                    rx="5"></rect>
                <polygon points="50,60 60,80 40,80" fill="currentColor" class="text-yellow-400"></polygon>
                <path d="M10 90 Q 30 70 50 90 T 90 70" stroke="currentColor" stroke-width="2" fill="none"
                    class="text-indigo-400"></path>
            </svg>
        </div>
    </section>

    <!-- Blog Posts Section -->
    <section id="blog-posts" class="py-12 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
        <h2 class="text-3xl font-bold text-center mb-10 text-gray-900 rounded-md">Latest Insights</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            @if ($articles->isNotEmpty())
                {{-- iterating data --}}
                @foreach ($articles as $item)
                    <!-- Blog Post Card 1 -->
                    <article
                        class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 border border-gray-200">
                        <img src="{{ $item->cover_image }}" alt="AI in the Future"
                            class="w-full h-48 object-cover rounded-md mb-4 border border-gray-300">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2 rounded-md">
                            {{ $item->title }}
                        </h3>
                        <p class="text-gray-600 text-sm mb-4">
                            {{ $item->description }}
                        </p>
                        <div class="flex justify-between items-center text-sm text-gray-500 mb-4">
                            <span>By {{ $item->user_id }}</span>
                            <span>{{ $item->created_at->diffForHumans() }}</span>
                        </div>
                        <a href="{{ route("blog.detail",$item->id) }}"
                            class="inline-block text-indigo-600 hover:text-indigo-800 font-medium rounded-md py-2 px-4 border border-indigo-600 hover:border-indigo-800 transition-colors">Read
                            More</a>
                    </article>
                @endforeach
            @else
                <center>
                    No data to show
                </center>
            @endif




        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-gray-900 text-gray-300 py-8 px-4 sm:px-6 lg:px-8 rounded-t-lg mt-8">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- About -->
            <div>
                <h4 class="text-lg font-semibold text-white mb-4 rounded-md">About Techtide</h4>
                <p class="text-sm leading-relaxed">
                    Techtide.com is your premier destination for cutting-edge tech news, insightful analyses, and future
                    trends. We aim to keep you informed and inspired.
                </p>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-lg font-semibold text-white mb-4 rounded-md">Quick Links</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="#"
                            class="hover:text-white transition-colors rounded-md p-1 hover:bg-gray-800">Home</a></li>
                    <li><a href="#"
                            class="hover:text-white transition-colors rounded-md p-1 hover:bg-gray-800">Blog</a></li>
                    <li><a href="#"
                            class="hover:text-white transition-colors rounded-md p-1 hover:bg-gray-800">Privacy
                            Policy</a></li>
                    <li><a href="#"
                            class="hover:text-white transition-colors rounded-md p-1 hover:bg-gray-800">Terms of
                            Service</a></li>
                </ul>
            </div>

            <!-- Contact & Social -->
            <div>
                <h4 class="text-lg font-semibold text-white mb-4 rounded-md">Connect With Us</h4>
                <p class="text-sm mb-4">Email: info@techtide.com</p>
                <div class="flex space-x-4">
                    <a href="#"
                        class="text-gray-400 hover:text-white transition-colors rounded-full p-2 hover:bg-gray-800">
                        <!-- Placeholder for Facebook icon -->
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M14 13.5h2.5l1-4H14v-2c0-1.03 0-2 2-2h3V2.14C17.96 2.07 17.06 2 16 2c-3.27 0-5.5 2-5.5 5.5v3.5H8v4h2.5V22h5.5v-8.5z" />
                        </svg>
                    </a>
                    <a href="#"
                        class="text-gray-400 hover:text-white transition-colors rounded-full p-2 hover:bg-gray-800">
                        <!-- Placeholder for Twitter icon -->
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.37-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.99C7.7 9.1 4.1 7.2 1.7 4.3c-.37.63-.58 1.36-.58 2.14 0 1.49.75 2.81 1.91 3.56-.7-.02-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.2-1.6.43-1.72.1-2.1.08.55 1.7 2.14 2.94 4.04 2.97-1.48 1.16-3.35 1.86-5.38 1.86-.35 0-.69-.02-1.03-.06C2.92 20.8 5.17 21.5 7.5 21.5c9 0 13.9-7.5 13.9-13.9 0-.21-.01-.43-.01-.64.96-.69 1.79-1.57 2.45-2.55z" />
                        </svg>
                    </a>
                    <a href="#"
                        class="text-gray-400 hover:text-white transition-colors rounded-full p-2 hover:bg-gray-800">
                        <!-- Placeholder for LinkedIn icon -->
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M22.23 0H1.77C.8 0 0 .77 0 1.73v20.54C0 23.23.8 24 1.77 24h20.46c.98 0 1.77-.77 1.77-1.73V1.73C24 .77 23.2 0 22.23 0zM7.12 20.45H3.59V9.58h3.53v10.87zM5.35 8.1c-1.15 0-2.07-.92-2.07-2.07 0-1.15.92-2.07 2.07-2.07 1.15 0 2.07.92 2.07 2.07 0 1.15-.92 2.07-2.07 2.07zM20.45 20.45h-3.53V14.8c0-1.34-.02-3.06-1.86-3.06-1.86 0-2.14 1.45-2.14 2.96v5.75h-3.53V9.58h3.39v1.55h.05c.47-.89 1.62-1.83 3.34-1.83 3.58 0 4.24 2.36 4.24 5.42v6.53z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="text-center text-sm text-gray-500 mt-8">
            &copy; 2025 Techtide.com. All rights reserved.
        </div>
    </footer>

    <script>
        // JavaScript for mobile menu toggle
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            mobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
            });
        });
    </script>
</body>

</html>
