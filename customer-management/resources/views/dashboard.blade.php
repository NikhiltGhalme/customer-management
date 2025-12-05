<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                <!-- Total Customers -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <div class="text-gray-900 dark:text-gray-100">
                        <h3 class="text-lg font-semibold">Total Customers</h3>
                        <p class="text-3xl font-bold mt-2">{{ $totalCustomers }}</p>
                    </div>
                </div>

                <!-- Total Orders -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <div class="text-gray-900 dark:text-gray-100">
                        <h3 class="text-lg font-semibold">Total Orders</h3>
                        <p class="text-3xl font-bold mt-2">{{ $totalOrders }}</p>
                    </div>
                </div>

                <!-- Total Revenue -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <div class="text-gray-900 dark:text-gray-100">
                        <h3 class="text-lg font-semibold">Total Revenue</h3>
                        <p class="text-3xl font-bold mt-2">${{ number_format($totalRevenue, 2) }}</p>
                    </div>
                </div>
            </div>

            <!-- Recent Customers -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-bold mb-4">Recent Customers</h3>
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white dark:bg-gray-800">
                            <thead>
                                <tr>
                                    <th class="py-2 px-4 border-b border-gray-200 dark:border-gray-700 text-left">Name</th>
                                    <th class="py-2 px-4 border-b border-gray-200 dark:border-gray-700 text-left">Email</th>
                                    <th class="py-2 px-4 border-b border-gray-200 dark:border-gray-700 text-left">Joined</th>
                                    <th class="py-2 px-4 border-b border-gray-200 dark:border-gray-700 text-left">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($recentCustomers as $customer)
                                    <tr>
                                        <td class="py-2 px-4 border-b border-gray-200 dark:border-gray-700">{{ $customer->name }}</td>
                                        <td class="py-2 px-4 border-b border-gray-200 dark:border-gray-700">{{ $customer->email }}</td>
                                        <td class="py-2 px-4 border-b border-gray-200 dark:border-gray-700">{{ $customer->created_at->diffForHumans() }}</td>
                                        <td class="py-2 px-4 border-b border-gray-200 dark:border-gray-700">
                                            <a href="{{ route('customers.show', $customer) }}" class="text-blue-500 hover:text-blue-700">View</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
