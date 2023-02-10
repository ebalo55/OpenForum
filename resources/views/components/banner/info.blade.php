@props(["message" => null])

<x-banner
    {{ $attributes->merge([
            'class' => 'bg-gradient-to-r from-sky-500 to-sky-400 text-white mb-8',
            'event_listener' => 'banner.info'
    ]) }}
    :message="$message"
/>
