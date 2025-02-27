<!-- show.blade.php (Show product Page) -->
<x-app-layout>
    <div class="container mx-auto p-6 max-w-full bg-white">
        <h1 class="text-2xl font-bold mb-4 text-center">Product Details</h1>
        
        <div class="mt-4">
            <label class="block text-gray-700 font-semibold">product Name:</label>
            <p class="w-full p-2 border rounded-lg bg-gray-100">{{ $product->name }}</p>
        </div>
        
        <div class="mt-4">
            <label class="block text-gray-700 font-semibold">Description:</label>
            <p class="w-full p-2">{!! $product->description !!}</p>
        </div>

        <div class="mt-8">
            <label class="block text-gray-700 font-semibold">product Name:</label>
            <p class="w-full p-2 border rounded-lg bg-gray-100">{{ $product->stock }}</p>
        </div>

        <div class="mt-4">
            <label class="block text-gray-700 font-semibold">product Name:</label>
            <p class="w-full p-2 border rounded-lg bg-gray-100">₦{{ $product->price }}</p>
        </div>
        
        <div class="mt-4">
            <label class="block text-gray-700 font-semibold">product Image:</label>
            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="h-64 w-[1/2] object-cover rounded-lg" />
        </div>
        
        <div class="mt-6 flex justify-between">
            <a href="{{ route('products.edit', $product) }}" class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600 transition">Edit</a>
            <form action="{{ route('products.destroy', $product) }}" method="POST">
                @csrf @method('DELETE')
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 transition">Delete</button>
            </form>
        </div>
    </div>
</x-app-layout>
