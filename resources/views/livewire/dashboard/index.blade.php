<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @can(\App\Enum\Permissions\Classes\Event::UPDATE())
                <x-banner.upload-in-progress wire:poll="checkIfImporting"/>
                <div class="grid grid-cols-2 gap-8">
                    @foreach($this->cardsData as $data)
                        @php
                            /** @var array{title: string, content: string|bool|int } $data */
                        @endphp

                        <x-card :class="!$this->shouldSpanFullGrid($data) ?: 'col-span-full'"
                                wire:key="{{$data['title']}}">
                            <x-card.header :class="!$this->shouldSpanFullGrid($data) ?: 'mx-auto'">
                                {{$data["title"]}}

                                @if(!$this->shouldSpanFullGrid($data))
                                    <x-button.small
                                        class="ml-auto text-sky-600 hover:bg-sky-100"
                                        :variant="\App\Enum\ButtonVariant::LINK"
                                        :url="route('settings.editor')"
                                    >
                                        Edit
                                    </x-button.small>
                                @endif
                            </x-card.header>

                            @if($this->isImporting && $this->shouldReactToImport($data))
                                <div wire:poll class="mx-auto text-lg font-light">
                                    {{ $this->{$data["property_name"]} }}
                                </div>
                            @else
                                <div class="mx-auto text-lg font-light">
                                    {{$data["content"]}}
                                </div>
                            @endif
                        </x-card>
                    @endforeach
                </div>
            @else
                @php // TODO: i cannot update anything so i can only register myself to events @endphp
            @endcan
        </div>
    </div>
</div>

@push("script")
@endpush
