<div x-data="{preview: false}">
    <x-jet-form-section submit="save">
        <x-slot name="title">
            General settings
        </x-slot>
        <x-slot name="description">
            <p class="text-sm text-gray-600">
                General settings defines the basic definitions of the activity.
            </p>
            <p class="text-sm text-gray-600">
                General settings defines:
            </p>
            <ul class="text-sm text-gray-600 list-disc pl-6">
                <li>
                    The name of the activity, this will be returned by API calls and will be the publicly displayed name
                    for
                    the activity.
                </li>
                <li>
                    Starting and ending time of the activity, this can be used to estimate durations and avoid the
                    possibility for users to reserve activity in overlapping time slots.
                </li>
                <li>
                    Max number of reservation, this can be seen also as the maximum number of attendance for the current
                    activity, a maximum may be defined because of space restriction or anything else.
                </li>
            </ul>
        </x-slot>
        <x-slot name="form">
            <div class="col-span-4">
                <div class="flex flex-col mb-4">
                    <x-jet-label>
                        Activity name:
                    </x-jet-label>
                    <x-jet-input wire:model.defer="activity.title"
                                 type="text"
                                 placeholder="Full stack web development, WTF is this?"
                                 class="max-w-[28rem]"
                    />
                    <x-jet-input-error for="activity.title"/>
                </div>
                <div class="flex flex-col mb-4">
                    <x-jet-label>
                        Starting time:
                    </x-jet-label>
                    <x-jet-input wire:model.defer="activity_starting_at"
                                 type="text"
                                 id="activity_starting_at"
                                 placeholder="08:30"
                                 class="max-w-[28rem]"/>
                    <x-jet-input-error for="activity_starting_at"/>
                </div>
                <div class="flex flex-col mb-4">
                    <x-jet-label>
                        Ending time:
                    </x-jet-label>
                    <x-jet-input wire:model.defer="activity_ending_at"
                                 type="text"
                                 id="activity_ending_at"
                                 placeholder="11:30"
                                 class="max-w-[28rem]"/>
                    <x-jet-input-error for="activity_ending_at"/>
                </div>
                <div class="flex flex-col mb-4">
                    <x-jet-label>
                        Max reservation:
                    </x-jet-label>
                    <x-jet-input wire:model.defer="activity.max_reservation"
                                 type="number"
                                 min="0"
                                 max="2000000000"
                                 placeholder="Max reservations"
                                 class="max-w-[28rem]"/>
                    <x-jet-input-error for="activity.max_reservation"/>
                </div>
            </div>
        </x-slot>
    </x-jet-form-section>
    <x-jet-form-section submit="save" class="mt-4">
        <x-slot name="title">
            Activity description
        </x-slot>
        <x-slot name="description">
            <p class="text-sm text-gray-600">
                The description of the activity deserves an isolated section because it allows strong customizability
                but requires a bit of attention in order to achieve the ending goal.
            </p>
            <p class="text-sm text-gray-600">
                Activity description is defined via
                <a href="https://it.wikipedia.org/wiki/Markdown" target="_blank" class="text-blue-600 underline">Markdown</a>.
            </p>
            <p class="text-sm text-gray-600">
                Markdown will help you create a rich and pretty description without any difficulty. We support the whole
                CommonMark and Github Flavored markdown syntax.
            </p>
            <p class="text-sm text-gray-600">
                To learn a bit of the Markdown syntax check
                <a href="https://github.com/adam-p/markdown-here/wiki/Markdown-Cheatsheet" target="_blank"
                   class="text-blue-600 underline">here</a>.
            </p>
        </x-slot>
        <x-slot name="form">
            <div class="flex flex-col mb-4 col-span-full">
                <x-jet-label class="flex items-center">
                    <div>Markdown description:</div>
                    <div class="ml-auto">
                        <x-button.small class="text-sky-500 hover:bg-sky-100" @click.prevent="preview = !preview"
                                        type="button">
                            Toggle preview
                        </x-button.small>
                    </div>
                </x-jet-label>
                <textarea wire:model.defer="activity.markup"
                          class="w-full appearance-none border border-gray-300 focus:border-gray-400
                              outline-none px-2 py-1 mt-1 focus:ring focus:ring-sky-200 transition-all duration-300
                              rounded-md"
                          rows="12"
                          x-transition.duration.300ms
                          x-show="!preview"
                ></textarea>
                <div class="prose" x-transition.duration.300ms x-show="preview">
                    <x-markdown>{{$activity->markup}}</x-markdown>
                </div>
                <x-jet-input-error for="activity.markup"/>
            </div>
        </x-slot>
        <x-slot name="actions">
            <x-jet-secondary-button
                wire:click="resetForm"
                class="border-0 bg-transparent shadow-none mr-4 hover:bg-gray-100 hover:border-b">
                Reset
            </x-jet-secondary-button>
            <x-jet-button class="bg-sky-500 hover:bg-sky-600 tracking-normal text-sm">
                Save
            </x-jet-button>
        </x-slot>
    </x-jet-form-section>
</div>

@push("script")
    @vite("resources/js/modules/event/activities/editor.ts")
@endpush
