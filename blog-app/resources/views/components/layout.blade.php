<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="flex h-screen">
        <div class="flex flex-col items-start w-full sm:w-[20%] py-4 pl-6 pb-8">
            <div class="flex gap-3 items-center pb-10">
                <img src="http://picsum.photos/seed/42/54" alt="" class="rounded-xl">
                <h1 class="text-xl whitespace-pre-line font-semibold text-xl accent">Tasks Book</h1>
            </div>
            <x-accent-text>Categories</x-accent-text>
            <x-sidebar-list>
                <x-sidebar-item :active="request()->is('/')">Category</x-sidebar-item>
                <x-sidebar-item>Category</x-sidebar-item>
                <x-sidebar-item>Category</x-sidebar-item>
                <x-sidebar-item>Category</x-sidebar-item>
                <x-sidebar-item :special="true">Category</x-sidebar-item>
            </x-sidebar-list>
            <x-accent-text>Data</x-accent-text>
            <x-sidebar-list>
                <x-sidebar-item>Statistics</x-sidebar-item>
                <x-sidebar-item>Compare</x-sidebar-item>
            </x-sidebar-list>
            <x-sidebar-item class="mt-auto">Log out</x-sidebar-item>
        </div>
        <div class="flex flex-col w-full sm:w-[80%] bg-gray-100 py-4 px-8 h-full">
            <nav class="flex justify-between pb-8">
                <x-button>Новая задача</x-button>
                <div class="flex items-center">
                    <h1>Уютного обеда, user</h1>
                    <div class="relative ml-4">
                        <button type="button" class="relative flex rounded-full bg-gray-800 text-sm focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                            <span class="sr-only">Open user menu</span>
                            <img class="size-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                        </button>
                        <div id="user-menu" class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5 hidden" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Your Profile</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Settings</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Sign out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="grid gap-4">
                {{ $slot }}
            </div>
        </div>
    </div>
</body>

</html>
