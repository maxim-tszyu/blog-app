@props(['h' => '22'])

<div class="bg-gray-200 p-4 rounded-lg mb-4" style="height: {{ $h }}%;">
    {{ $slot }}
</div>
