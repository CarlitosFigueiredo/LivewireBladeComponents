<div class="grid gap-2 p-4 rounded-xl bg-gray-100 max-w-sm">

    <div class="pb-2">
        @if ($heading instanceof \illuminate\view\componentSlot)
            {{ $heading }}
        @else
            <h2 class="text-2xl font-bold">{{ $heading }}</h2>
        @endif
    </div>

    <div class="text-sm text-gray-700">
       {{ $body }}
    </div>

    <div class="pt-8 pb-2">
        <x-separator class="!bg-gray-200" />
    </div>

    <div {{ $footer->attributes->class(['flex gap-2', 'flex-col' => $footer->attributes->has('col')]) }}>

        {{ $footer }}
    </div>
</div>
