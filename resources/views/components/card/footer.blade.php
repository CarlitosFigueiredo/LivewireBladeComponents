@props(['col' => false])

<div class="grid gap-2">

    <div class="pt-8 pb-2">
        <x-separator class="!bg-gray-200" />
    </div>

    <div {{ $attributes->class(['flex gap-2', 'flex-col' => $col ]) }}>
        {{ $slot }}
    </div>
</div>
