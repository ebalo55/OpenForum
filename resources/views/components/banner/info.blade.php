@props(["message" => null])

<x-banner class="bg-gradient-to-r from-sky-500 to-sky-400 text-white mb-8">
    <x-slot:message>
        {{$message}}
    </x-slot:message>
</x-banner>
