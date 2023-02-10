<x-jet-form-section submit="save">
    <x-slot name="title">
        General settings
    </x-slot>
    <x-slot name="description">
        <p class="text-sm text-gray-600">
            General settings defines the global behaviour of the backend and should be considered as the
            first thing to set-up when defining the events.
        </p>
        <p class="text-sm text-gray-600">
            General settings defines:
        </p>
        <ul class="text-sm text-gray-600 list-disc pl-6">
            <li>
                When the backend will allow subscriptions to the event to start and end.
                This is usually limited to a well-defined date-time range.
                Subscription before or after the defined time-range will not be handled and result in an
                error when requesting via API.
            </li>
            <li>
                The website name, this setting is not strictly required but if used allows to define and
                edit the front-end main title from the backend without the need to re-deploy or change
                anything on the front-end.
            </li>
        </ul>
    </x-slot>
    <x-slot name="form">
        <div class="col-span-4">
            <div class="flex flex-col mb-4">
                <x-jet-label>
                    Website name:
                </x-jet-label>
                <x-jet-input wire:model.defer="site_name"
                             type="text"
                             placeholder="CasteForum"
                             class="max-w-[20rem]"
                />
                <x-jet-input-error for="site_name"/>
            </div>
            <div class="flex flex-col mb-4">
                <x-jet-label>
                    Registration available from:
                </x-jet-label>
                <x-jet-input wire:model.defer="registration_available_from"
                             type="text"
                             id="registration_available_from"
                             class="max-w-[20rem]"/>
                <x-jet-input-error for="registration_available_from"/>
            </div>
            <div class="flex flex-col mb-4">
                <x-jet-label>
                    Registration available to:
                </x-jet-label>
                <x-jet-input wire:model.defer="registration_available_to"
                             type="text"
                             id="registration_available_to"
                             class="max-w-[20rem]"/>
                <x-jet-input-error for="registration_available_to"/>
            </div>
        </div>
    </x-slot>
    <x-slot name="actions">
        <x-jet-secondary-button
            wire:click="resetForm"
            class="border-0 bg-transparent shadow-none mr-4 hover:bg-gray-100 hover:border-b"
            wire:dirty.attr.remove="disabled"
            wire:target="site_name, registration_available_from, registration_available_to"
            disabled>
            Reset
        </x-jet-secondary-button>
        <x-jet-button class="bg-sky-500 hover:bg-sky-600 tracking-normal text-sm"
                      wire:dirty.attr.remove="disabled"
                      wire:target="site_name, registration_available_from, registration_available_to"
                      disabled>
            Save
        </x-jet-button>
    </x-slot>
</x-jet-form-section>

@push("script")
    @vite("resources/js/modules/settings/general-settings-form.ts")
@endpush
