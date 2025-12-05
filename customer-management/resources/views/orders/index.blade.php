<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Orders') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-between mb-4">
                        <h3 class="text-lg font-bold">Order List</h3>
                        <a href="{{ route('orders.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Add Order
                        </a>
                    </div>

                    <div class="mb-4">
                        <form action="{{ route('orders.index') }}" method="GET" class="flex items-center">
                            <label for="status" class="mr-2">Filter by Status:</label>
                            <select name="status" id="status" class="rounded-md border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" onchange="this.form.submit()">
                                <option value="">All</option>
                                <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                                <option value="completed" {{ request('status') == 'completed' ? 'selected' : '' }}>Completed</option>
                                <option value="cancelled" {{ request('status') == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                            </select>
                        </form>
                    </div>

                    @if (session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                            <span class="block sm:inline">{{ session('success') }}</span>
                        </div>
                    @endif

                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white dark:bg-gray-800">
                            <thead>
                                <tr>
                                    <th class="py-2 px-4 border-b border-gray-200 dark:border-gray-700 text-left">Order #</th>
                                    <th class="py-2 px-4 border-b border-gray-200 dark:border-gray-700 text-left">Customer</th>
                                    <th class="py-2 px-4 border-b border-gray-200 dark:border-gray-700 text-left">Amount</th>
                                    <th class="py-2 px-4 border-b border-gray-200 dark:border-gray-700 text-left">Status</th>
                                    <th class="py-2 px-4 border-b border-gray-200 dark:border-gray-700 text-left">Date</th>
                                    <th class="py-2 px-4 border-b border-gray-200 dark:border-gray-700 text-left">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td class="py-2 px-4 border-b border-gray-200 dark:border-gray-700">{{ $order->order_number }}</td>
                                        <td class="py-2 px-4 border-b border-gray-200 dark:border-gray-700">{{ $order->customer->name }}</td>
                                        <td class="py-2 px-4 border-b border-gray-200 dark:border-gray-700">{{ $order->amount }}</td>
                                        <td class="py-2 px-4 border-b border-gray-200 dark:border-gray-700 capitalize">{{ $order->status }}</td>
                                        <td class="py-2 px-4 border-b border-gray-200 dark:border-gray-700">{{ $order->order_date }}</td>
                                        <td class="py-2 px-4 border-b border-gray-200 dark:border-gray-700">
                                            <a href="{{ route('orders.show', $order) }}" class="text-blue-500 hover:text-blue-700 mr-2">View</a>
                                            <a href="{{ route('orders.edit', $order) }}" class="text-yellow-500 hover:text-yellow-700 mr-2">Edit</a>
                                            <form action="{{ route('orders.destroy', $order) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        {{ $orders->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
