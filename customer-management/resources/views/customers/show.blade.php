<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Customer Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex items-center mb-6">
                        @if ($customer->profile_image)
                            <img src="{{ asset('storage/' . $customer->profile_image) }}" alt="{{ $customer->name }}" class="h-24 w-24 object-cover rounded-full mr-4">
                        @else
                            <div class="h-24 w-24 bg-gray-300 rounded-full mr-4 flex items-center justify-center text-gray-500">
                                No Image
                            </div>
                        @endif
                        <div>
                            <h3 class="text-2xl font-bold">{{ $customer->name }}</h3>
                            <p class="text-gray-500">{{ $customer->email }}</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <h4 class="font-semibold text-lg mb-2">Contact Information</h4>
                            <p><strong>Phone:</strong> {{ $customer->phone }}</p>
                            <p><strong>Address:</strong> {{ $customer->address }}</p>
                        </div>
                        <div>
                            <h4 class="font-semibold text-lg mb-2">Account Information</h4>
                            <p><strong>Joined:</strong> {{ $customer->created_at->format('M d, Y') }}</p>
                        </div>
                    </div>

                    <div class="mt-6 flex space-x-4">
                        <a href="{{ route('customers.edit', $customer) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                            Edit Customer
                        </a>
                        <a href="{{ route('customers.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                            Back to List
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
