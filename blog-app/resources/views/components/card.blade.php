@props(['h' => '23'])

<div class="bg-white p-4 rounded-lg mb-4" style="height: {{ $h }}%;">
    {{ $slot }}
</div>
