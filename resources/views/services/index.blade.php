<x-app-layout>
    <div class="container mx-auto p-6">
        <div class="mb-6 flex justify-between">
            <h1 class="text-3xl font-bold">All Services</h1>
            <a href="{{ route('services.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">Add New Service</a>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full border-collapse bg-white shadow-lg rounded-lg">
                <thead>
                    <tr class="bg-gray-700 text-white">
                        <th class="p-3 text-left">#</th>
                        <th class="p-3 text-left">Image</th>
                        <th class="p-3 text-left">Name</th>
                        <th class="p-3 text-left">Description</th>
                        <th class="p-3 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($services as $index => $service)
                    <tr class="border-b">
                        <td class="p-3 font-semibold">{{ $services->firstItem() + $index }}</td>
                        <td class="p-3">
                            <img src="{{ asset($service->image) }}" alt="{{ $service->name }}" class="h-16 w-16 object-cover rounded-lg" />
                        </td>
                        <td class="p-3 font-semibold">{{ $service->name }}</td>
                        <td class="p-3 text-gray-600">{!!Str::limit($service->description, 50) !!}</td>
                        <td class="p-3 flex space-x-2 mt-3">
                            <a href="{{ route('services.show', $service) }}" class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600 transition">View</a>
                            <a href="{{ route('services.edit', $service) }}" class="bg-yellow-500 text-white px-3 py-1 rounded-lg hover:bg-yellow-600 transition">Edit</a>
                            <form action="{{ route('services.destroy', $service) }}" method="POST">
                                @csrf @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-600 transition">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-4">
                {{ $services->links() }}
            </div>
        </div>
    </div>
</x-app-layout>