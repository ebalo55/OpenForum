@props(['submit', "with_bordered_card" => false, "form_classes" => "", "form_wrapper_classes" => "", "form_container_classes" => "", "form_grid_classes" => ""])

<div {{ $attributes->merge(['class' => 'md:grid md:grid-cols-3 md:gap-6']) }}>
    <x-jet-section-title>
        <x-slot name="title">{{ $title }}</x-slot>
        <x-slot name="description">{{ $description }}</x-slot>
    </x-jet-section-title>

    <div class="mt-5 md:mt-0 md:col-span-2 {{$form_wrapper_classes}}">
        <form wire:submit.prevent="{{ $submit }}" class="{{$form_classes}}">
            <div
                class="px-4 py-5 bg-white sm:p-6 shadow
                {{$form_container_classes}}
                {{ isset($actions) ? 'sm:rounded-tl-md sm:rounded-tr-md' : 'sm:rounded-md' }}
                {{ !$with_bordered_card ?: (isset($actions) ? 'border-t border-r border-l' : 'border') }}
                ">
                <div class="grid grid-cols-6 gap-6 {{$form_grid_classes}}">
                    {{ $form }}
                </div>
            </div>

            @if (isset($actions))
                <div
                    class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow
                    sm:rounded-bl-md sm:rounded-br-md
                    {{ !$with_bordered_card ?: 'border-b border-r border-l' }}
                    ">
                    {{ $actions }}
                </div>
            @endif
        </form>
    </div>
</div>
