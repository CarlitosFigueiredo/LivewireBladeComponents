@props([
    'vertical' => false,
])

@if ($vertical)
    <div aria-orientation="vertical" role="separator" class="bg-gray-400 h-full w-[1px]"></div>
@else
    <div aria-orientation="horinzontal" role="separator" class="bg-gray-400 h-[1px] w-full"></div>
@endif

