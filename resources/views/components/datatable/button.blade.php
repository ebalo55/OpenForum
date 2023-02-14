@props([
	"event",
	"url"
])

<x-button class="bg-white hover:bg-gray-100 flex items-center justify-center border border-gray-300 pl-2"
          :variant="\App\Enum\ButtonVariant::LINK"
          :url="$url"
>
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
         class="mr-1 object-contain h-5">
        <path d="M6 12H18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M12 18V6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
    Add new event
</x-button>
