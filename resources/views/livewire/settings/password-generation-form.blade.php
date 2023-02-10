<x-jet-form-section submit="save" class="{{ $this->class }}" id="password_generation_form">
    <x-slot name="title">
        Password generation settings
    </x-slot>
    <x-slot name="description">
        <p class="text-sm text-gray-600">
            Password generation settings allow you to define dynamically a secure password assigned to a user.
        </p>
        <p class="text-sm text-gray-600">
            Dynamically generating passwords gives some security benefits:
        </p>
        <ul class="text-sm text-gray-600 list-disc pl-6">
            <li>
                The fragments composing the password can be freely shared publicly.
            </li>
            <li>
                Passwords may change from year to year.
            </li>
            <li>
                The passwords can be easily recovered knowing personal user's information and setup data.
            </li>
        </ul>
    </x-slot>
    <x-slot name="form">
        <div class="col-span-full">
            <div class="flex flex-col mb-4">
                <div class="grid grid-cols-[min(12rem)_1fr]">
                    <x-jet-label>
                        <strong>Sample name:</strong>
                    </x-jet-label>
                    <x-jet-label>
                        {{ $this->fake_name }}
                    </x-jet-label>
                    <x-jet-label>
                        <strong>Sample birth date:</strong>
                    </x-jet-label>
                    <x-jet-label>
                        {{ $this->fake_birth_date_printable }}
                    </x-jet-label>
                    <x-jet-label>
                        <strong>Generated password:</strong>
                    </x-jet-label>
                    <x-jet-label id="generated_password">
                        {{ $this->generated_password }}
                    </x-jet-label>
                </div>

                <div class="my-3">
                    <x-jet-label class="flex flex-col">
                        <span>Applied rules:</span>
                        <small>Click to remove</small>
                    </x-jet-label>
                    <div class="mt-1" id="applied-rule-container">
                        @foreach($this->generation_rules as $generation_rule)
                            <x-button.small type="button"
                                            class="applied-rule my-1 bg-sky-100 hover:bg-red-200"
                                            wire:key="applied-rule-{{$loop->index}}-{{$generation_rule()}}"
                                            data-index="{{$loop->index}}"
                                            x-data="{ index: {{$loop->index}} }"
                                            @click="
                                            if(document.querySelectorAll('.applied-rule').length <= 1) {
                                                throw Error('Unable to remove rule, at least one rule is required')
                                            }

                                            const input = document.getElementById('generation_rules')

                                            // update the input value removing the previously applied rule
                                            let individual_elements = input.value.split(',')
                                            individual_elements.splice(index, 1)
                                            $wire.set('generation_rules', individual_elements)
                                            "
                            >
                                {{ Str::ucfirst(Str::snake(Str::studly($generation_rule()), " ")) }}
                                <span class="ml-2">
                                    x
                                </span>
                            </x-button.small>
                        @endforeach
                    </div>
                </div>

                <x-jet-input wire:model.defer="generation_rules"
                             id="generation_rules"
                             type="hidden"/>
                <x-jet-input-error for="generation_rules"/>
            </div>
            <div class="my-3">
                <x-jet-label class="flex flex-col">
                    <span>Available rules:</span>
                    <small>Click to add</small>
                </x-jet-label>
                <div class="mt-1">
                    @foreach($this->options as $option)
                        <x-button.small type="button"
                                        class="available-rule my-1 bg-sky-100"
                                        wire:key="available-rule-{{$loop->index}}-{{$option()}}"
                                        x-data="{value: '{{$option()}}'}"
                                        @click="
                                        const input = document.getElementById('generation_rules')

                                        // update the input value removing the previously applied rule
                                        let individual_elements = input.value.split(',')
                                        individual_elements.push(value)
                                        $wire.set('generation_rules', individual_elements)
                                        "
                        >
                            {{ Str::ucfirst(Str::snake(Str::studly($option()), " ")) }}
                        </x-button.small>
                    @endforeach
                </div>
            </div>
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
