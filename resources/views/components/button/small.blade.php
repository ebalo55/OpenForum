@php use App\Enum\ButtonVariant; @endphp
@props([
	"variant" => ButtonVariant::BUTTON,
	"url" => null,
	"target" => "_self",
])

@if($variant === ButtonVariant::BUTTON)
    <button
        {{$attributes->merge(["class" => "px-3 py-1 rounded-sm text-sm transition-all duration-300 hover:bg-gray-100"])}}>
        {{$slot}}
    </button>
@elseif($variant === ButtonVariant::LINK)
    <a
        href="{{$url}}"
        target="{{$target}}"
        {{$attributes->merge(["class" => "px-3 py-1 rounded-sm text-sm transition-all duration-300 hover:bg-gray-100"])}}>
        {{$slot}}
    </a>
@endif
