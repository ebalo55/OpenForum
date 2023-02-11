@props(["tab_id"])

<div
    x-data="{tab_id: {{$tab_id}} }"
    x-show="active_tab === tab_id"
    x-transition.300ms
    class="p-4"
>
    {{ $slot }}
</div>
