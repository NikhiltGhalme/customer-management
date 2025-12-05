<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Customers') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-between mb-4">
                        <h3 class="text-lg font-bold">Customer List</h3>
                        <a href="{{ route('customers.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Add Customer
                        </a>
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
                                    <th class="py-2 px-4 border-b border-gray-200 dark:border-gray-700 text-left">Name</th>
                                    <th class="py-2 px-4 border-b border-gray-200 dark:border-gray-700 text-left">Email</th>
                                    <th class="py-2 px-4 border-b border-gray-200 dark:border-gray-700 text-left">Phone</th>
                                    <th class="py-2 px-4 border-b border-gray-200 dark:border-gray-700 text-left">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($customers as $customer)
                                    <tr>
                                        <td class="py-2 px-4 border-b border-gray-200 dark:border-gray-700">{{ $customer->name }}</td>
                                        <td class="py-2 px-4 border-b border-gray-200 dark:border-gray-700">{{ $customer->email }}</td>
                                        <td class="py-2 px-4 border-b border-gray-200 dark:border-gray-700">{{ $customer->phone }}</td>
                                        <td class="py-2 px-4 border-b border-gray-200 dark:border-gray-700">
                                            <a href="{{ route('customers.show', $customer) }}" class="text-blue-500 hover:text-blue-700 mr-2">View</a>
                                            <a href="{{ route('customers.edit', $customer) }}" class="text-yellow-500 hover:text-yellow-700 mr-2">Edit</a>
                                            <form action="{{ route('customers.destroy', $customer) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure?');">
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
                        {{ $customers->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
