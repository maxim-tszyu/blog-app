<x-layout>
    <div class="flex justify-between gap-4 h-full">
        <div class="w-full sm:w-[56%] h-full">
            <x-result></x-result>
            <x-card :h="66">
                <x-accent-text>Active tasks</x-accent-text>
                <div class="flex flex-col gap-2 pb-4">
                    <x-task-card></x-task-card>
                    <x-task-card></x-task-card>
                    <x-task-card></x-task-card>
                    <x-task-card></x-task-card>
                </div>
                <x-accent-text>Completed tasks</x-accent-text>
                <div class="flex flex-col gap-2">
                    <x-task-card></x-task-card>
                    <x-task-card></x-task-card>
                </div>
            </x-card>
        </div>
        <div class="w-full sm:w-[42%] h-full">
            <x-card>
                <x-accent-text>Current time is</x-accent-text>
            </x-card>
            <x-card>1</x-card>
            <x-card>1</x-card>
            <x-card>1</x-card>
        </div>
    </div>
</x-layout>
