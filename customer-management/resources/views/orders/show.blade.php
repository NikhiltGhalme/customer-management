<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Order Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="mb-6">
                        <h3 class="text-2xl font-bold">Order #{{ $order->order_number }}</h3>
                        <p class="text-gray-500">Date: {{ $order->order_date }}</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <h4 class="font-semibold text-lg mb-2">Customer Information</h4>
                            <p><strong>Name:</strong> {{ $order->customer->name }}</p>
                            <p><strong>Email:</strong> {{ $order->customer->email }}</p>
                            <p><strong>Phone:</strong> {{ $order->customer->phone }}</p>
                        </div>
                        <div>
                            <h4 class="font-semibold text-lg mb-2">Order Information</h4>
                            <p><strong>Amount:</strong> {{ $order->amount }}</p>
                            <p><strong>Status:</strong> <span class="capitalize">{{ $order->status }}</span></p>
                        </div>
                    </div>

                    <div class="mt-6 flex space-x-4">
                        <a href="{{ route('orders.edit', $order) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                            Edit Order
                        </a>
                        <a href="{{ route('orders.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                            Back to List
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
