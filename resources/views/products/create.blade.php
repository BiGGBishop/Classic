<x-app-layout>
    <div class="container mx-auto p-6 max-w-full bg-white">
        <h1 class="text-2xl font-bold mb-4 text-center">Create a New Product</h1>
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            
            <div>
                <label class="block text-gray-700 font-semibold">Product Name:</label>
                <input type="text" name="name" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            
            <div>
                <label class="block text-gray-700 font-semibold">Description:</label>
                <textarea id="editor" name="description" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>

            <div>
                <label class="block text-gray-700 font-semibold">Price (₦):</label>
                <input type="number" name="price" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            
            <div>
                <label class="block text-gray-700 font-semibold">Stock:</label>
                <input type="number" name="stock" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            
            <div>
                <label class="block text-gray-700 font-semibold">Product Image:</label>
                <input type="file" name="image" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            
            <div class="text-center">
                <button type="submit" class="bg-blue-500 text-black px-4 py-2 rounded-lg hover:bg-blue-600 transition">Save Product</button>
            </div>
        </form>
    </div>
</x-app-layout>