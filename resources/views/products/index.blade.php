<x-app-layout>
    <div class="container mx-auto p-6">
        <div class="mb-6 flex justify-between">
            <h1 class="text-3xl font-bold">All Products</h1>
            <a href="{{ route('products.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">Add New Product</a>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full border-collapse bg-white shadow-lg rounded-lg">
                <thead>
                    <tr class="bg-gray-700 text-white">
                        <th class="p-3 text-left">#</th>
                        <th class="p-3 text-left">Image</th>
                        <th class="p-3 text-left">Name</th>
                        <th class="p-3 text-left">Description</th>
                        <th class="p-3 text-left">Stock</th>
                        <th class="p-3 text-left">Price</th>
                        <th class="p-3 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $index => $product)
                    <tr class="border-b">
                        <td class="p-3 font-semibold">{{ $products->firstItem() + $index }}</td>
                        <td class="p-3">
                            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="h-16 w-16 object-cover rounded-lg" />
                        </td>
                        <td class="p-3 font-semibold">{{ $product->name }}</td>
                        <td class="p-3 text-gray-600">{!! Str::limit($product->description, 50) !!}</td>
                        <td class="p-3 text-gray-600">{{ $product->stock }}</td>
                        <td class="p-3 text-gray-600">₦{{ $product->price }}</td>
                        <td class="p-3 flex space-x-2 mt-3">
                            <a href="{{ route('products.show', $product) }}" class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600 transition">View</a>
                            <a href="{{ route('products.edit', $product) }}" class="bg-yellow-500 text-white px-3 py-1 rounded-lg hover:bg-yellow-600 transition">Edit</a>
                            <form action="{{ route('products.destroy', $product) }}" method="POST">
                                @csrf @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-600 transition">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-4">
                {{ $products->links() }}
            </div>
        </div>
    </div>
</x-app-layout>