@props(["message" => null])

<x-banner
    {{ $attributes->merge([
	    'class' => 'bg-gradient-to-r from-red-400 to-red-500 text-white mb-8 h-[60px] flex items-center',
	]) }}
    event_listener="banner.error"
>
    <x-slot:message>
        <lottie-player
            src="https://assets3.lottiefiles.com/temp/lf20_QYm9j9.json"
            background="transparent"
            speed="1"
            style="width: 60px; height: 60px;"
            autoplay
            loop
            class="absolute left-0 top-0"
        ></lottie-player>
        <span class="ml-[60px]"></span>
        {{$message}}
    </x-slot:message>
</x-banner>
