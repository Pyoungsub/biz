<x-admin-layout>
    <x-slot name="header">
        Dashboard
    </x-slot>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
        <div class="bg-white rounded-lg shadow p-4">
            <h3 class="text-gray-500 text-sm font-semibold mb-2">Total Users</h3>
            <p class="text-2xl font-bold">1,234</p>
            <div class="h-20 bg-gray-100 mt-4 rounded flex items-center justify-center">
                <span class="text-gray-400">Graph</span>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow p-4">
            <h3 class="text-gray-500 text-sm font-semibold mb-2">Active Sessions</h3>
            <p class="text-2xl font-bold">567</p>
            <div class="h-20 bg-gray-100 mt-4 rounded flex items-center justify-center">
                <span class="text-gray-400">Graph</span>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow p-4">
            <h3 class="text-gray-500 text-sm font-semibold mb-2">Revenue</h3>
            <p class="text-2xl font-bold">$12,345</p>
            <div class="h-20 bg-gray-100 mt-4 rounded flex items-center justify-center">
                <span class="text-gray-400">Graph</span>
            </div>
        </div>
    </div>

    <!-- Charts Section -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
        <div class="bg-white rounded-lg shadow p-4 h-64 flex items-center justify-center">
            <span class="text-gray-400">Line Chart</span>
        </div>
        <div class="bg-white rounded-lg shadow p-4 h-64 flex items-center justify-center">
            <span class="text-gray-400">Bar Chart</span>
        </div>
    </div>
</x-admin-layout>