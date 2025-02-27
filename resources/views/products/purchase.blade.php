<x-app-layout>
    <div class="container mx-auto p-6">
        <div class="mb-6 flex justify-between">
            <h1 class="text-3xl font-bold">All Purchases</h1>
        </div>

        <div class="overflow-x-auto bg-white shadow-lg rounded-lg">
            <table class="w-full border border-gray-300 rounded-lg">
                <thead>
                    <tr class="bg-gray-700 text-white text-left">
                        <th class="p-3 border border-gray-400">#</th>
                        <th class="p-3 border border-gray-400">Customer Name</th>
                        <th class="p-3 border border-gray-400">Phone</th>
                        <th class="p-3 border border-gray-400">Email</th>
                        <th class="p-3 border border-gray-400">Product</th>
                        <th class="p-3 border border-gray-400">Purchased At</th>
                        <th class="p-3 border border-gray-400">Status</th>
                        <th class="p-3 border border-gray-400">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($purchases as $index => $purchase)
                    <tr class="border-b border-gray-300 hover:bg-gray-100">
                        <td class="p-3 border border-gray-300">{{ $purchases->firstItem() + $index }}</td>
                        <td class="p-3 border border-gray-300">{{ $purchase->name }}</td>
                        <td class="p-3 border border-gray-300">{{ $purchase->phone }}</td>
                        <td class="p-3 border border-gray-300">{{ $purchase->email }}</td>
                        <td class="p-3 border border-gray-300">{{ $purchase->product->name }}</td>
                        <td class="p-3 border border-gray-300">{{ $purchase->created_at->format('d M Y, H:i A') }}</td>
                        <td class="p-3 border border-gray-300">
                            @if($purchase->status == 'pending')
                                <span class="px-2 py-1 bg-yellow-500 text-white text-sm rounded">Pending</span>
                            @else
                                <span class="px-2 py-1 bg-green-500 text-white text-sm rounded">Contacted</span>
                            @endif
                        </td>
                        <td class="p-3 border border-gray-300">
                            @if($purchase->status == 'pending')
                                <form action="{{ route('purchases.update', $purchase->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600 transition">
                                        Mark as Contacted
                                    </button>
                                </form>
                            @else
                                <span class="text-gray-500">✔ Contacted</span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Pagination -->
            <div class="mt-4">
                {{ $purchases->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
