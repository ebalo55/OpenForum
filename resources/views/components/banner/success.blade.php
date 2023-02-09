@props(["message" => null])

<x-banner
    {{ $attributes->merge([
	    'class' => 'bg-gradient-to-r from-teal-500 to-teal-400 text-white mb-8 h-[60px] flex items-center',
	]) }}
    event_listener="banner.success"
>
    <x-slot:message>
        <lottie-player
            src="https://assets8.lottiefiles.com/datafiles/QvFXU1UQnXcp6XJ/data.json"
            background="transparent"
            speed="1"
            style="width: 60px; height: 60px;"
            autoplay
            class="absolute left-0 top-0"
        ></lottie-player>
        <span class="ml-[60px]"></span>
        {{$message}}
    </x-slot:message>
</x-banner>
