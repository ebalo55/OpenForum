@props(["active_tab" => 0])

<div
    x-data="{active_tab: {{$active_tab}} }"
    {{ $attributes->merge([
        "class" => "w-full bg-white border p-2 rounded shadow-lg",
    ]) }}
>
    {{$slot}}
</div>
