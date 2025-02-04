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
                <div class="flex w-full">
                    <div class="flex-1">
                        <h1>На часах у нас</h1>
                        <x-sidebar-item class="text-xl">12:00:00</x-sidebar-item>
                    </div>
                    <div class="flex-1">
                        <h1>А дата у нас</h1>
                        <x-sidebar-item class="text-xl">April 5th, 2021</x-sidebar-item>
                    </div>
                </div>
            </x-card>
            <x-card>
                <x-accent-text>Observations</x-accent-text>
                <div class="pt-4">
                    <p>You completed the most amount of tasks on Monday</p>
                    <p>You created the most amount of tasks on Friday</p>
                </div>
            </x-card>
            <x-card>
                <x-accent-text>Fact of the day</x-accent-text>
                <p class='pt-8'>You like doing tasks</p>
            </x-card>
            <x-card :h="33">
                <x-accent-text>Performance stats</x-accent-text>
            </x-card>
        </div>
    </div>
</x-layout>
