@props(['margin' => 'week'])

<x-card :h="30"
    class="bg-gradient-to-r from-indigo-50 to-purple-100 shadow-lg rounded-2xl p-6 transition-transform hover:scale-105 duration-300 overflow-hidden">
    <x-accent-text class="text-2xl font-bold text-gray-700 mb-4">This {{ $margin }}'s Results</x-accent-text>

    <div class="flex justify-between items-center h-[80%] flex-wrap gap-4 box-border px-8">
        <div class="flex flex-col items-center">
            <div class="text-indigo-500 text-3xl">📥</div>
            <p class="text-sm font-medium text-gray-600">Created</p>
            <h1 class="text-2xl font-bold text-indigo-600">113</h1>
            <p class="text-xs font-medium text-gray-500">tasks</p>
        </div>
        <div class="flex flex-col items-center">
            <div class="text-indigo-500 text-3xl">✅</div>
            <p class="text-sm font-medium text-gray-600">Finished</p>
            <h1 class="text-2xl font-bold text-green-600">87</h1>
            <p class="text-xs font-medium text-gray-500">tasks</p>
        </div>
        <div class="flex flex-col items-center">
            <div class="text-indigo-500 text-3xl">🗑️</div>
            <p class="text-sm font-medium text-gray-600">Deleted</p>
            <h1 class="text-2xl font-bold text-red-600">12</h1>
            <p class="text-xs font-medium text-gray-500">tasks</p>
        </div>
    </div>

</x-card>
