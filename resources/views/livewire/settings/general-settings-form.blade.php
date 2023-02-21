<div>
    <x-jet-form-section submit="save" :with_bordered_card="true">
        <x-slot name="title">
            General settings
        </x-slot>
        <x-slot name="description">
            <p class="text-sm text-gray-600">
                General settings defines the global behaviour of the backend and should be considered as the
                first thing to set-up when defining the event.
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
    <x-jet-form-section submit="save" class="mt-4" :with_bordered_card="true">
        <x-slot name="title">
            <div class="flex items-center">
                General settings
                <span
                    class="px-2 py-1 text-xs bg-red-500 rounded-sm font-bold text-gray-100 ml-auto uppercase">Critical</span>
            </div>
        </x-slot>
        <x-slot name="description">
            <p class="text-sm text-gray-600">
                Critical general settings defines the global behaviour of the backend but may result in unwanted side
                effects and should be carefully setup.
            </p>
            <p class="text-sm text-gray-600">
                The general (critical) settings defines:
            </p>
            <ul class="text-sm text-gray-600 list-disc pl-6">
                <li>
                    When the event starts and ends, this value is used to define the number of available days for the
                    creation of events.
                </li>
                <li>
                    Which will be the locations where the events will take place.
                </li>
            </ul>
            <p class="text-sm text-gray-600">
                Side effect notes:
            </p>
            <ul class="text-sm text-gray-600 list-disc pl-6">
                <li>
                    Whenever one of the values in the form aside is modified all the days and related events gets
                    dropped and substituted with new, freshly created day-location pairs
                </li>
                <li>
                    There is no way to recover the deleted events title, descriptions and related data if they are
                    removed via the modification of the critical properties.
                </li>
            </ul>
        </x-slot>
        <x-slot name="form">
            <div class="col-span-4">
                <div class="flex flex-col mb-4">
                    <x-jet-label>
                        Forum days:
                    </x-jet-label>
                    <x-jet-input wire:model.defer="forum_days"
                                 type="text"
                                 id="forum_days"
                                 class="max-w-[20rem]"/>
                    <x-jet-input-error for="forum_days"/>
                    <x-jet-input-error for="starting_date"/>
                    <x-jet-input-error for="ending_date"/>
                </div>
                <div class="flex flex-col mb-4">
                    <x-jet-label>
                        <div class="flex flex-col">
                            <div>Event locations:</div>
                            <div class="text-xs">
                                Write a location per line, a location can be a street address, an URL
                                or anything else represents a location for you
                            </div>
                        </div>
                    </x-jet-label>

                    <textarea wire:model.defer="locations"
                              class="max-w-[24rem] appearance-none border border-gray-300 focus:border-gray-400
                              outline-none px-2 py-1 mt-1 focus:ring focus:ring-sky-200 transition-all duration-300
                              rounded-md"
                              rows="4"
                    ></textarea>
                    <x-jet-input-error for="locations"/>
                </div>
            </div>
        </x-slot>
        <x-slot name="actions">
            <x-jet-secondary-button
                wire:click="resetForm"
                class="border-0 bg-transparent shadow-none mr-4 hover:bg-gray-100 hover:border-b"
                wire:dirty.attr.remove="disabled"
                wire:target="forum_days, locations"
                disabled>
                Reset
            </x-jet-secondary-button>
            <x-jet-button class="bg-sky-500 hover:bg-sky-600 tracking-normal text-sm"
                          wire:dirty.attr.remove="disabled"
                          wire:target="forum_days, locations"
                          disabled>
                Save
            </x-jet-button>
        </x-slot>
    </x-jet-form-section>
</div>


@push("script")
    @vite("resources/js/modules/settings/general-settings-form.ts")
@endpush
