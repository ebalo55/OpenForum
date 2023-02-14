@props([
	"variant" => \App\Enum\ButtonVariant::BUTTON,
	"url" => null,
	"target" => "_self",
])

@if($variant === \App\Enum\ButtonVariant::BUTTON)
    <button
        {{$attributes->merge(["class" => "px-4 py-2 rounded text-sm transition-all duration-300 hover:bg-gray-100"])}}>
        {{$slot}}
    </button>
@elseif($variant === \App\Enum\ButtonVariant::LINK)
    <a
        href="{{$url}}"
        target="{{$target}}"
        {{$attributes->merge(["class" => "px-4 py-2 rounded text-sm transition-all duration-300 hover:bg-gray-100"])}}>
        {{$slot}}
    </a>
@endif
