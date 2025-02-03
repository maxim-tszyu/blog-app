@props(['url' => 'http://picsum.photos/seed/42/18', 'special' => false, 'active' => false])

@php
    $classes = $special ? 'font-normal accent' : 'font-normal';
@endphp

<div {{ $attributes->merge(['class' => 'flex gap-2 items-center w-full']) }}>
    <img src="{{ $url }}" alt="" class="h-6 w-6 object-cover">
    <h1 class="{{ $classes }} flex items-center">{{ $slot }}</h1>
    @if($active)
        <div class="w-5 h-4 accent-bg rounded-l-2xl ml-auto self-center"></div>
    @endif
</div>
