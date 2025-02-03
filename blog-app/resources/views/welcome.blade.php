<x-layout>
    <div class="flex justify-between gap-4 h-full">
        <div class="w-full sm:w-[58%] h-full">
            <x-result></x-result>
            <x-card :h="60">
                <x-accent-text>Active tasks</x-accent-text>
            </x-card>
        </div>
        <div class="w-full sm:w-[38%] h-full">
            <x-card>1</x-card>
            <x-card>1</x-card>
            <x-card>1</x-card>
            <x-card>1</x-card>
        </div>
    </div>
</x-layout>
