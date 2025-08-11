<x-layouts.admin-main-layout>
    <div class="container my-auto px-4">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white rounded-lg shadow-md">
                <div class="px-6 py-4 border-b border-gray-200">
                    <h3 class="text-lg font-semibold text-gray-900">Create New Blog Post</h3>
                </div>
                <div class="p-6">
                    <form>
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                            <div class="lg:col-span-2 space-y-6">
                                <div>
                                    <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Title</label>
                                    <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" id="title" name="title" placeholder="Enter blog title">
                                </div>

                                <div>
                                    <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                                    <textarea class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" id="description" name="description" rows="3" placeholder="Enter blog description"></textarea>
                                </div>

                                <div>
                                    <label for="blog_body" class="block text-sm font-medium text-gray-700 mb-2">Blog Content</label>
                                    <textarea class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" id="blog_body" name="blog_body" rows="10" placeholder="Write your blog content here"></textarea>
                                </div>

                                <div>
                                    <label for="tags" class="block text-sm font-medium text-gray-700 mb-2">Tags</label>
                                    <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" id="tags" name="tags" placeholder="Enter tags separated by commas">
                                </div>
                            </div>

                            <div class="space-y-6">
                                <div>
                                    <label for="time_to_read" class="block text-sm font-medium text-gray-700 mb-2">Time to Read (minutes)</label>
                                    <input type="number" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" id="time_to_read" name="time_to_read" placeholder="5">
                                </div>

                                <div>
                                    <label for="cover_image" class="block text-sm font-medium text-gray-700 mb-2">Cover Image</label>
                                    <input type="file" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" id="cover_image" name="cover_image" accept="image/*">
                                </div>

                                <div>
                                    <label for="cover_image_caption" class="block text-sm font-medium text-gray-700 mb-2">Cover Image Caption</label>
                                    <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" id="cover_image_caption" name="cover_image_caption" placeholder="Enter image caption">
                                </div>

                                <div>
                                    <label for="user_id" class="block text-sm font-medium text-gray-700 mb-2">Author</label>
                                    <select class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" id="user_id" name="user_id">
                                        <option value="">Select Author</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center space-x-4 mt-8">
                            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-md transition duration-200">Create Blog Post</button>
                            <a href="#" class="bg-gray-300 hover:bg-gray-400 text-gray-700 font-medium py-2 px-4 rounded-md transition duration-200">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin-main-layout>
