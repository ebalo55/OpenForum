<div {{ $attributes->merge([
	"class" => "grid grid-cols-6 divide-x-2"
]) }}>
    {{$slot}}
</div>
