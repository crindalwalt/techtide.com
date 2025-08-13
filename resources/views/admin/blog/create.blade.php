<x-layouts.admin-main-layout>
    {{-- * Create a new blog post page --}}
    <div class="container my-auto px-4">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white rounded-lg shadow-md">
                <div class="px-6 py-4 border-b border-gray-200">
                    <h3 class="text-lg font-semibold text-gray-900">Create New Blog Post</h3>
                </div>
                <div class="p-6">
                    <form action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                            <div class="lg:col-span-2 space-y-6">
                                <div>
                                    <label for="title"
                                        class="block text-sm font-medium text-gray-700 mb-2">Title</label>
                                    <input type="text"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                        id="title" name="title" placeholder="Enter blog title">
                                    @error('title')
                                        <div class="text-red-600 text-sm mt-1">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div>
                                    <label for="description"
                                        class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                                    <textarea
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                        id="description" name="description" rows="3" placeholder="Enter blog description"></textarea>
                                    @error('description')
                                        <div class="text-red-600 text-sm mt-1">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div>
                                    <label for="blog_body" class="block text-sm font-medium text-gray-700 mb-2">Blog
                                        Content</label>
                                    <textarea
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                        id="blog_body" name="blog_body" rows="10" placeholder="Write your blog content here"></textarea>
                                    @error('blog_body')
                                        <div class="text-red-600 text-sm mt-1">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div>
                                    <label for="tags"
                                        class="block text-sm font-medium text-gray-700 mb-2">Tags</label>
                                    <input type="text"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                        id="tags" name="tags" placeholder="Enter tags separated by commas">

                                    @error('tags')
                                        <div class="text-red-600 text-sm mt-1">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="space-y-6">
                                <div>
                                    <label for="time_to_read" class="block text-sm font-medium text-gray-700 mb-2">Time
                                        to Read (minutes)</label>
                                    <input type="number"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                        id="time_to_read" name="time_to_read" placeholder="5">
                                    @error('time_to_read')
                                        <div class="text-red-600 text-sm mt-1">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div>
                                    <label for="cover_image" class="block text-sm font-medium text-gray-700 mb-2">Cover
                                        Image</label>
                                    <input type="file"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                        id="cover_image" name="cover_image" accept="image/*">
                                    @error('cover_image')
                                        <div class="text-red-600 text-sm mt-1">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div>
                                    <label for="cover_image_caption"
                                        class="block text-sm font-medium text-gray-700 mb-2">Cover Image Caption</label>
                                    <input type="text"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                        id="cover_image_caption" name="cover_image_caption"
                                        placeholder="Enter image caption">
                                    @error('cover_image_caption')
                                        <div class="text-red-600 text-sm mt-1">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div>
                                    <label for="user_id" class="block text-sm font-medium text-gray-700 mb-2">posting
                                        as {{ Auth::user()->name }}</label>
                                    <input type="hidden"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                        id="user_id" name="user_id" value="{{ Auth::user()->id }}">
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center space-x-4 mt-8">
                            <button type="submit"
                                class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-md transition duration-200">Create
                                Blog Post</button>
                            <a href="#"
                                class="bg-gray-300 hover:bg-gray-400 text-gray-700 font-medium py-2 px-4 rounded-md transition duration-200">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin-main-layout>
