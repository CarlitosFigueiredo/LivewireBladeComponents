@props([
    'icon' => false,
])

<button class="flex items-center justify-center gap-2 relative font-bold">

    @if ($icon)
        <x-dynamic-component :component="icon.$icon" />
    @endif

    {{ $slot }}
</button>
