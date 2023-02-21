@captureSlots([
'detail',
])

<x-filament-support::dropdown.list.item
    :attributes="\Filament\Support\prepare_inherited_attributes($attributes)->merge($slots)"
    :dark-mode="config('tables.dark_mode')"
>
    {{ $slot }}
</x-filament-support::dropdown.list.item>
