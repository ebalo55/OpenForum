@props(["tab_id"])

<button
    x-data="{ tab_id: {{$tab_id}} }"
    @click="active_tab = tab_id"
    {{
	$attributes->merge([
		"class" => "text-sm font-semibold flex items-center justify-center px-6 py-4 relative"
    ]) }}
>
    <span
        x-transition:enter="transition-all duration-300"
        x-transition:enter-start="opacity-0 scale-x-0"
        x-transition:enter-end="opacity-1 scale-x-100"
        x-transition:leave="transition-all duration-300"
        x-transition:leave-start="opacity-1 scale-x-100"
        x-transition:leave-end="opacity-0 scale-x-0"
        class="h-1 w-[66%] absolute inset-x bottom-1 bg-sky-400 rounded-full"
        x-show="active_tab === tab_id"
    ></span>
    {{$slot}}
</button>
