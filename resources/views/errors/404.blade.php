<x-app-layout>
    <div class="min-h-[60vh] flex items-center justify-center px-6 py-12">
        <div class="text-center">
            <h1 class="text-9xl font-extrabold text-gray-800 dark:text-gray-100">404</h1>
            <p class="mt-4 text-xl font-semibold text-gray-600 dark:text-gray-300">
                {{ $exception->getMessage() ?: 'Page Not Found' }}
            </p>
            <p class="mt-2 text-gray-500 dark:text-gray-400">
                Sorry, the page you are looking for could not be found.
            </p>
            <div class="mt-6">
                <a href="{{ url('/') }}"
                   class="inline-block px-6 py-3 rounded-xl bg-indigo-600 text-white font-semibold shadow hover:bg-indigo-700 transition">
                    Go Back Home
                </a>
            </div>
        </div>
    </div>
</x-app-layout>