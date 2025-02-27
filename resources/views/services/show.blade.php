<!-- show.blade.php (Show Service Page) -->
<x-app-layout>
    <div class="container mx-auto p-6 max-w-full bg-white">
        <h1 class="text-2xl font-bold mb-4 text-center">Service Details</h1>
        
        <div class="mt-4">
            <label class="block text-gray-700 font-semibold">Service Name:</label>
            <p class="w-full p-2 border rounded-lg bg-gray-100">{{ $service->name }}</p>
        </div>
        
        <div class="mt-4">
            <label class="block text-gray-700 font-semibold">Description:</label>
            <p class="w-full p-2">{!! $service->description !!}</p>
        </div>
        
        <div class="mt-8">
            <label class="block text-gray-700 font-semibold">Service Image:</label>
            <img src="{{ asset($service->image) }}" alt="{{ $service->name }}" class="h-64 w-[1/2] object-cover rounded-lg" />
        </div>
        
        <div class="mt-6 flex justify-between">
            <a href="{{ route('services.edit', $service) }}" class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600 transition">Edit</a>
            <form action="{{ route('services.destroy', $service) }}" method="POST">
                @csrf @method('DELETE')
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 transition">Delete</button>
            </form>
        </div>
    </div>
</x-app-layout>
