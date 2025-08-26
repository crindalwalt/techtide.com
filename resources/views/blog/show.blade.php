<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Rise of Generative AI: What's Next? - Techtide.com</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts - Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f9fafb; /* Light gray background */
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
            cursor: grab;
        }
    </style>
</head>
<body class="text-gray-800">

    <!-- Header Section (Reused from blog list page) -->
    <header class="bg-white shadow-sm py-4 px-4 sm:px-6 lg:px-8 rounded-b-lg">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <!-- Logo/Site Title -->
            <a href="#" class="text-2xl font-bold text-gray-900 rounded-md p-2 hover:bg-gray-100 transition-colors">techtide.com</a>

            <!-- Navigation (Desktop) -->
            <nav class="hidden md:flex space-x-6">
                <a href="#" class="text-gray-600 hover:text-gray-900 font-medium transition-colors rounded-md p-2 hover:bg-gray-100">Home</a>
                <a href="#" class="text-gray-600 hover:text-gray-900 font-medium transition-colors rounded-md p-2 hover:bg-gray-100">Blog</a>
                <a href="#" class="text-gray-600 hover:text-gray-900 font-medium transition-colors rounded-md p-2 hover:bg-gray-100">About</a>
                <a href="#" class="text-gray-600 hover:text-gray-900 font-medium transition-colors rounded-md p-2 hover:bg-gray-100">Contact</a>
            </nav>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-gray-600 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 rounded-md p-2 hover:bg-gray-100">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu (Hidden by default) -->
        <nav id="mobile-menu" class="hidden md:hidden mt-4 space-y-2">
            <a href="#" class="block text-gray-600 hover:text-gray-900 font-medium transition-colors rounded-md p-2 hover:bg-gray-100">Home</a>
            <a href="#" class="block text-gray-600 hover:text-gray-900 font-medium transition-colors rounded-md p-2 hover:bg-gray-100">Blog</a>
            <a href="#" class="block text-gray-600 hover:text-gray-900 font-medium transition-colors rounded-md p-2 hover:bg-gray-100">About</a>
            <a href="#" class="block text-gray-600 hover:text-gray-900 font-medium transition-colors rounded-md p-2 hover:bg-gray-100">Contact</a>
        </nav>
    </header>

    <!-- Blog Post Content Section -->
    <main class="max-w-4xl mx-auto my-8 p-6 bg-white rounded-lg shadow-md border border-gray-200">
        <!-- Post Header -->
        <header class="mb-8 text-center">
            <h1 class="text-3xl sm:text-4xl font-extrabold text-gray-900 leading-tight mb-4 rounded-md">
                {{ $blog->title }}
            </h1>
            <div class="text-gray-600 text-sm flex justify-center items-center space-x-2">
                <span>By <span class="font-semibold text-indigo-600">{{ $blog->user_id }}</span></span>
                <span class="text-gray-400">&bull;</span>
                <span>{{ $blog->created_at->diffForHumans() }}</span>
                <span class="text-gray-400">&bull;</span>
                <span>{{ $blog->time_to_read }} min read</span>
            </div>
        </header>

        <!-- Post Hero Image -->
        <figure class="mb-8">
            <img src="{{ asset($blog->cover_image) }}" alt="Generative AI transforming industries" class="w-full h-auto object-cover rounded-lg shadow-lg border border-gray-300">
            <figcaption class="text-center text-gray-500 text-sm mt-2">
                {{ $blog->cover_image_caption }}
            </figcaption>
        </figure>

        <!-- Post Body Content -->
        <article class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
            <p class="mb-4">
                {{ $blog->blog_body }}
            </p>

        </article>

        <!-- Post Tags -->
        <div class="mt-8 pt-4 border-t border-gray-200">
            <span class="text-gray-600 font-semibold mr-2">Tags:</span>
            <a href="#" class="inline-block bg-indigo-100 text-indigo-700 text-xs font-medium px-3 py-1 rounded-full hover:bg-indigo-200 transition-colors mr-2 mb-2">{{ $blog->tags }}</a>
            <a href="#" class="inline-block bg-indigo-100 text-indigo-700 text-xs font-medium px-3 py-1 rounded-full hover:bg-indigo-200 transition-colors mr-2 mb-2">Generative AI</a>
            <a href="#" class="inline-block bg-indigo-100 text-indigo-700 text-xs font-medium px-3 py-1 rounded-full hover:bg-indigo-200 transition-colors mb-2">Future Tech</a>
        </div>

        <!-- Share Section (Optional) -->
        <div class="mt-6 flex items-center justify-center space-x-4 text-gray-600">
            <span class="font-semibold">Share this article:</span>
            <a href="#" class="hover:text-indigo-600 transition-colors">
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M14 13.5h2.5l1-4H14v-2c0-1.03 0-2 2-2h3V2.14C17.96 2.07 17.06 2 16 2c-3.27 0-5.5 2-5.5 5.5v3.5H8v4h2.5V22h5.5v-8.5z"/></svg>
            </a>
            <a href="#" class="hover:text-indigo-600 transition-colors">
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.37-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.99C7.7 9.1 4.1 7.2 1.7 4.3c-.37.63-.58 1.36-.58 2.14 0 1.49.75 2.81 1.91 3.56-.7-.02-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.2-1.6.43-1.72.1-2.1.08.55 1.7 2.14 2.94 4.04 2.97-1.48 1.16-3.35 1.86-5.38 1.86-.35 0-.69-.02-1.03-.06C2.92 20.8 5.17 21.5 7.5 21.5c9 0 13.9-7.5 13.9-13.9 0-.21-.01-.43-.01-.64.96-.69 1.79-1.57 2.45-2.55z"/></svg>
            </a>
            <a href="#" class="hover:text-indigo-600 transition-colors">
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M22.23 0H1.77C.8 0 0 .77 0 1.73v20.54C0 23.23.8 24 1.77 24h20.46c.98 0 1.77-.77 1.77-1.73V1.73C24 .77 23.2 0 22.23 0zM7.12 20.45H3.59V9.58h3.53v10.87zM5.35 8.1c-1.15 0-2.07-.92-2.07-2.07 0-1.15.92-2.07 2.07-2.07 1.15 0 2.07.92 2.07 2.07 0 1.15-.92 2.07-2.07 2.07zM20.45 20.45h-3.53V14.8c0-1.34-.02-3.06-1.86-3.06-1.86 0-2.14 1.45-2.14 2.96v5.75h-3.53V9.58h3.39v1.55h.05c.47-.89 1.62-1.83 3.34-1.83 3.58 0 4.24 2.36 4.24 5.42v6.53z"/></svg>
            </a>
        </div>
    </main>

    <!-- Related Posts Section (Optional but good for engagement) -->
    <section class="py-12 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
        <h2 class="text-2xl font-bold text-center mb-8 text-gray-900 rounded-md">More from Techtide</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Related Post Card 1 -->
            <article class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 border border-gray-200">
                <img src="https://placehold.co/600x400/D1D5DB/4B5563?text=Cybersecurity+Tips" alt="Cybersecurity Trends" class="w-full h-40 object-cover rounded-md mb-4 border border-gray-300">
                <h3 class="text-lg font-semibold text-gray-900 mb-2 rounded-md">Cybersecurity in 2025: Protecting Your Digital Footprint</h3>
                <p class="text-gray-600 text-sm mb-4">
                    Stay ahead of the curve with the latest cybersecurity trends and best practices...
                </p>
                <a href="#" class="inline-block text-indigo-600 hover:text-indigo-800 font-medium text-sm">Read More &rarr;</a>
            </article>

            <!-- Related Post Card 2 -->
            <article class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 border border-gray-200">
                <img src="https://placehold.co/600x400/D1D5DB/4B5563?text=Quantum+Leap" alt="Quantum Computing" class="w-full h-40 object-cover rounded-md mb-4 border border-gray-300">
                <h3 class="text-lg font-semibold text-gray-900 mb-2 rounded-md">Quantum Computing: The Next Frontier of Processing Power</h3>
                <p class="text-gray-600 text-sm mb-4">
                    Delve into the fascinating world of quantum computing and its potential...
                </p>
                <a href="#" class="inline-block text-indigo-600 hover:text-indigo-800 font-medium text-sm">Read More &rarr;</a>
            </article>

            <!-- Related Post Card 3 -->
            <article class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 border border-gray-200">
                <img src="https://placehold.co/600x400/D1D5DB/4B5563?text=Web3+Explained" alt="Web3 Decentralization" class="w-full h-40 object-cover rounded-md mb-4 border border-gray-300">
                <h3 class="text-lg font-semibold text-gray-900 mb-2 rounded-md">Understanding Web3: Decentralization and Beyond</h3>
                <p class="text-gray-600 text-sm mb-4">
                    Unpack the core concepts of Web3, blockchain, and how decentralization...
                </p>
                <a href="#" class="inline-block text-indigo-600 hover:text-indigo-800 font-medium text-sm">Read More &rarr;</a>
            </article>
        </div>
    </section>

    <!-- Footer Section (Reused from blog list page) -->
    <footer class="bg-gray-900 text-gray-300 py-8 px-4 sm:px-6 lg:px-8 rounded-t-lg mt-8">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- About -->
            <div>
                <h4 class="text-lg font-semibold text-white mb-4 rounded-md">About Techtide</h4>
                <p class="text-sm leading-relaxed">
                    Techtide.com is your premier destination for cutting-edge tech news, insightful analyses, and future trends. We aim to keep you informed and inspired.
                </p>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-lg font-semibold text-white mb-4 rounded-md">Quick Links</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="hover:text-white transition-colors rounded-md p-1 hover:bg-gray-800">Home</a></li>
                    <li><a href="#" class="hover:text-white transition-colors rounded-md p-1 hover:bg-gray-800">Blog</a></li>
                    <li><a href="#" class="hover:text-white transition-colors rounded-md p-1 hover:bg-gray-800">Privacy Policy</a></li>
                    <li><a href="#" class="hover:text-white transition-colors rounded-md p-1 hover:bg-gray-800">Terms of Service</a></li>
                </ul>
            </div>

            <!-- Contact & Social -->
            <div>
                <h4 class="text-lg font-semibold text-white mb-4 rounded-md">Connect With Us</h4>
                <p class="text-sm mb-4">Email: info@techtide.com</p>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-white transition-colors rounded-full p-2 hover:bg-gray-800">
                        <!-- Placeholder for Facebook icon -->
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M14 13.5h2.5l1-4H14v-2c0-1.03 0-2 2-2h3V2.14C17.96 2.07 17.06 2 16 2c-3.27 0-5.5 2-5.5 5.5v3.5H8v4h2.5V22h5.5v-8.5z"/></svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors rounded-full p-2 hover:bg-gray-800">
                        <!-- Placeholder for Twitter icon -->
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.37-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.99C7.7 9.1 4.1 7.2 1.7 4.3c-.37.63-.58 1.36-.58 2.14 0 1.49.75 2.81 1.91 3.56-.7-.02-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.2-1.6.43-1.72.1-2.1.08.55 1.7 2.14 2.94 4.04 2.97-1.48 1.16-3.35 1.86-5.38 1.86-.35 0-.69-.02-1.03-.06C2.92 20.8 5.17 21.5 7.5 21.5c9 0 13.9-7.5 13.9-13.9 0-.21-.01-.43-.01-.64.96-.69 1.79-1.57 2.45-2.55z"/></svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors rounded-full p-2 hover:bg-gray-800">
                        <!-- Placeholder for LinkedIn icon -->
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M22.23 0H1.77C.8 0 0 .77 0 1.73v20.54C0 23.23.8 24 1.77 24h20.46c.98 0 1.77-.77 1.77-1.73V1.73C24 .77 23.2 0 22.23 0zM7.12 20.45H3.59V9.58h3.53v10.87zM5.35 8.1c-1.15 0-2.07-.92-2.07-2.07 0-1.15.92-2.07 2.07-2.07 1.15 0 2.07.92 2.07 2.07 0 1.15-.92 2.07-2.07 2.07zM20.45 20.45h-3.53V14.8c0-1.34-.02-3.06-1.86-3.06-1.86 0-2.14 1.45-2.14 2.96v5.75h-3.53V9.58h3.39v1.55h.05c.47-.89 1.62-1.83 3.34-1.83 3.58 0 4.24 2.36 4.24 5.42v6.53z"/></svg>
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
