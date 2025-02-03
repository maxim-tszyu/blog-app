<a href="/" class="w-1/4">
    <div class="flex accent-bg w-1/1 rounded-md py-2 items-center justify-center gap-2">
        <img src="http://picsum.photos/seed/42/18" alt="" class="rounded-xl">
        <p {{ $attributes->merge(['class' => 'text-white font-xs font-normal']) }}>{{ $slot }}</p>
    </div>
</a>
