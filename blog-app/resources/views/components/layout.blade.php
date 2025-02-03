<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="flex h-screen">
        <div class="flex flex-col items-start w-[20%] py-4 pl-6 pb-8">
            <div class="flex gap-3 items-center pb-10">
                <img src="http://picsum.photos/seed/42/54" alt="" class="rounded-xl">
                <h1 class="text-xl whitespace-pre-line font-semibold text-xl accent">Tasks
                    Book</h1>
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
        <div class="flex flex-col w-[90%] bg-gray-100 py-4 px-8 h-full">
            <nav>
                <div class="flex accent-bg w-1/4 rounded-md py-2 items-center justify-center gap-2">
                    <img src="http://picsum.photos/seed/42/18" alt="" class="rounded-xl">
                    <a href="" class="text-white font-xs font-normal">Новая задача</a>
                </div>
            </nav>
            <div>

            </div>
        </div>
    </div>
</body>

</html>
