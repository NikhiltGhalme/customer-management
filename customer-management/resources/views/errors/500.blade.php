<x-guest-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg text-center">
            <h1 class="text-4xl font-bold text-gray-800 dark:text-gray-200 mb-4">500</h1>
            <p class="text-gray-600 dark:text-gray-400 mb-6">Oops! Something went wrong on our servers.</p>
            <a href="{{ url('/') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Go Home
            </a>
        </div>
    </div>
</x-guest-layout>
