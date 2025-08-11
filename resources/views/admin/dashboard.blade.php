<x-layouts.admin-main-layout>
    {{-- page content --}}
    <main class="flex-1 p-6 md:p-8 overflow-y-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-lg font-semibold text-gray-800">Total Posts</h2>
                <p class="text-3xl font-bold text-gray-900 mt-2">124</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-lg font-semibold text-gray-800">Monthly Views</h2>
                <p class="text-3xl font-bold text-gray-900 mt-2">5,432</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-lg font-semibold text-gray-800">New Comments</h2>
                <p class="text-3xl font-bold text-gray-900 mt-2">18</p>
            </div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Recent Posts</h2>
            <ul class="divide-y divide-gray-200">
                <li class="py-4">
                    <a href="#" class="block hover:bg-gray-50 p-2 rounded-lg">
                        <h3 class="text-lg font-medium text-gray-900">How to Use Tailwind CSS for Fast Prototyping</h3>
                        <p class="text-sm text-gray-500 mt-1">Published on: August 7, 2025</p>
                    </a>
                </li>
                <li class="py-4">
                    <a href="#" class="block hover:bg-gray-50 p-2 rounded-lg">
                        <h3 class="text-lg font-medium text-gray-900">A Guide to Modern JavaScript Frameworks</h3>
                        <p class="text-sm text-gray-500 mt-1">Published on: August 5, 2025</p>
                    </a>
                </li>
                <li class="py-4">
                    <a href="#" class="block hover:bg-gray-50 p-2 rounded-lg">
                        <h3 class="text-lg font-medium text-gray-900">The Power of Asynchronous Programming</h3>
                        <p class="text-sm text-gray-500 mt-1">Published on: August 1, 2025</p>
                    </a>
                </li>
            </ul>
        </div>
    </main>
</x-layouts.admin-main-layout>
