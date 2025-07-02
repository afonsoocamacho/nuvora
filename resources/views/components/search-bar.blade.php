@props([
    'placeholder' => 'Placeholder text',
    'shortcut' => '',
    'wireModel' => null,
])

<div class="search-bar">
    <div class="">

        <x-icon name="magnifying-glass" class="search-icon" />


        <input type="text" {{ $wireModel ? "wire:model.live.debounce.300ms='$wireModel'" : '' }}
            class="search-input p-small" placeholder="{{ $placeholder }}">

    </div>

    @if ($shortcut !== '')
        <div class="search-shortcut">{{ $shortcut }}</div>
    @else
    @endif
</div>
