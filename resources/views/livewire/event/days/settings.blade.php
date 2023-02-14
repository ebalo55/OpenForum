<x-jet-form-section submit="save"
                    :with_bordered_card="true"
>
    <x-slot name="title">
        Event settings
    </x-slot>
    <x-slot name="description">
        <p class="text-sm text-gray-600">
            Each event is uniquely identified by the pair
            <x-code.inline>date - location</x-code.inline>
            and by its
            nickname.
        </p>
        <p class="text-sm text-gray-600">
            Additionally each event instance can have a maximum number of reservation associated with it.
        </p>
        <p class="text-sm text-gray-600">
            The number of reservation is counted as the number of distinct user who have reserved at least one activity
            for the given
            <x-code.inline>date - location</x-code.inline>
            pair.
        </p>
        <p class="text-sm text-gray-600">
            You can freely change the following properties here:
        </p>
        <ul class="text-sm text-gray-600 list-disc pl-6">
            <li class="my-1">
                <x-code.inline>Nickname</x-code.inline>
                :
                This value will be returned by the API responses in order to allow for the unique identification of
                <x-code.inline>date - location</x-code.inline>
                pair from front-end.
            </li>
            <li class="my-1">
                <x-code.inline>Maximum reservation number</x-code.inline>
                :
                This value defines the maximum number of unique users having one or more reservations for the current
                <x-code.inline>date - location</x-code.inline>
                pair.
            </li>
        </ul>
        <ul class="text-sm text-gray-600">
            <li class="my-1">
                <strong>Event identification pair:</strong>
            </li>
            <li class="my-1">
                <x-code.inline>Date</x-code.inline>
                : {{format_date($event_day->date)}}
            </li>
            <li class="my-1">
                <x-code.inline>Location</x-code.inline>
                : {{$event_day->location}}
            </li>
        </ul>
    </x-slot>
    <x-slot name="form">
        <div class="col-span-4">
            <div class="flex flex-col mb-4">
                <x-jet-label>
                    Event nickname:
                </x-jet-label>
                <x-jet-input wire:model.defer="event_day.nickname"
                             type="text"
                             placeholder="Event {{$event_day->id}}"
                             class="max-w-[20rem]"
                />
                <x-jet-input-error for="event_day.nickname"/>
            </div>
            <div class="flex flex-col mb-4">
                <x-jet-label>
                    Max reservation:
                </x-jet-label>
                <x-jet-input wire:model.defer="event_day.max_reservation"
                             type="number"
                             min="0"
                             max="2000000000"
                             placeholder="Max reservations"
                             class="max-w-[20rem]"/>
                <x-jet-input-error for="event_day.max_reservation"/>
            </div>
        </div>
    </x-slot>
    <x-slot name="actions">
        <x-jet-secondary-button
            wire:click="resetForm"
            class="border-0 bg-transparent shadow-none mr-4 hover:bg-gray-100 hover:border-b"
            wire:dirty.attr.remove="disabled"
            wire:target="event_day.nickname, event_day.max_reservation"
            disabled>
            Reset
        </x-jet-secondary-button>
        <x-jet-button class="bg-sky-500 hover:bg-sky-600 tracking-normal text-sm"
                      wire:dirty.attr.remove="disabled"
                      wire:target="event_day.nickname, event_day.max_reservation"
                      disabled>
            Save
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
