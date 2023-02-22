@php use App\Enum\ButtonVariant; @endphp
@php use App\Enum\Permissions\Classes\Management; @endphp
@php use App\Enum\InternalRoles; @endphp
@php use App\Models\Reservation; @endphp
<div>
    <x-slot name="header">
        <div class="flex items-center">
            <x-button class="px-2"
                      :variant="ButtonVariant::LINK"
                      :url="route('users.index')"
            >
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15 19.9201L8.47997 13.4001C7.70997 12.6301 7.70997 11.3701 8.47997 10.6001L15 4.08008"
                          stroke="currentColor"
                          stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </x-button>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight ml-2">
                {{ __('User') }}: {{$user->prefixed_id}}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-banner.success/>
            <x-banner.error/>
            <div class="bg-white rounded shadow-md border grid grid-cols-6 pb-6">
                <div class="col-span-full bg-gray-50 border-b px-6 py-3 mb-6 rounded-t flex items-center justify-end">
                    @can(Management::MANAGE_USER_ROLES())
                        <x-jet-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button"
                                            class="inline-flex items-center px-3 py-1 border text-sm
                                            leading-normal font-medium rounded-md text-gray-500 bg-white hover:text-gray-700
                                            focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">
                                        Quick actions

                                        <svg class="ml-2 -mr-0.5 h-3 w-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                             viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                                        </svg>
                                    </button>
                                </span>
                            </x-slot>

                            <x-slot name="content">
                                <!-- Account Management -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    Account management
                                </div>

                                @if($user->hasRole(InternalRoles::USER()))
                                    <form wire:submit.prevent="elevate" x-data>
                                        @csrf

                                        <x-button class="block px-4 py-2 text-sm leading-5 text-gray-700
                                            hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition
                                            w-full text-left">
                                            Elevate to admin
                                        </x-button>
                                    </form>
                                @else
                                    <form wire:submit.prevent="downgrade" x-data>
                                        @csrf

                                        <x-button class="block px-4 py-2 text-sm leading-5 text-gray-700
                                            hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition
                                            w-full text-left">
                                            Downgrade to user
                                        </x-button>
                                    </form>
                                @endif
                            </x-slot>
                        </x-jet-dropdown>
                    @endcan
                    <x-button type="submit" wire:click="save"
                              class="border bg-white hover:bg-gray-100 ml-4 py-1 rounded">
                        Save
                    </x-button>
                </div>
                <form class="col-span-2 ml-6 mr-4" wire:submit.prevent="save">
                    <div class="flex flex-col border-b border-dashed py-2 text-sm">
                        <div class="flex w-full items-center">
                            <span class="font-semibold" for="user.name">Full name:</span>
                            <x-jet-input class="ml-auto" wire:model.debounce="user.name"></x-jet-input>
                        </div>
                        <x-jet-input-error for="user.name"/>
                    </div>
                    <div class="flex flex-col border-b border-dashed py-2 text-sm">
                        <div class="flex w-full items-center">
                            <span class="font-semibold">Email:</span>
                            <x-jet-input class="ml-auto" wire:model.debounce="user.email"></x-jet-input>
                        </div>
                        <x-jet-input-error for="user.email"/>
                    </div>
                    <div class="flex items-center border-b border-dashed py-2 text-sm">
                        <span class="font-semibold">Has verified email?</span>
                        @if($user->email_verified_at)
                            <span class="ml-auto text-green-500 font-bold">Yes</span>
                        @else
                            <span class="ml-auto text-amber-500 font-bold">No</span>
                        @endif
                    </div>
                    <div class="flex items-center border-b border-dashed py-2 text-sm">
                        <span class="font-semibold">Has reservations?</span>
                        @if($user->reservations->count() > 0)
                            <span class="ml-auto text-green-500 font-bold">Yes</span>
                        @else
                            <span class="ml-auto text-amber-500 font-bold">No</span>
                        @endif
                    </div>
                </form>
                <div class="col-span-4 mr-6 ml-4">
                    <div class="flex items-center py-1 text-sm">
                        <span class="font-semibold">Reservations</span>
                    </div>
                    @if($this->user_reservations->count() > 0)
                        @php
                            $last_reservation_date = now();
                        @endphp

                        @foreach($this->user_reservations as $key => $reservation)
                            @php
                                /** @var Reservation $reservation */
                            @endphp

                            @if($reservation->eventDay->date->timestamp !== $last_reservation_date->timestamp)
                                @php
                                    $last_reservation_date = $reservation->eventDay->date;
                                @endphp
                                <div
                                    class="flex flex-col text-sm
                                    {{
									    isset($this->user_reservations[$key +1]) &&
									    $this->user_reservations[$key +1]->eventDay->date->timestamp === $last_reservation_date->timestamp
									    ? "border-l border-r border-t rounded-t px-2 pt-2" : "border p-2 my-4 rounded"
									}}
							    ">
                                    <div class="flex items-center">
                                        <span class="font-semibold">Day:</span>
                                        <span class="ml-auto">{{format_date($reservation->eventDay->date)}}</span>
                                    </div>
                                    <div class="flex items-center">
                                        <span class="font-semibold">Location:</span>
                                        <span class="ml-auto">{{$reservation->eventDay->location}}</span>
                                    </div>
                                    <div class="flex items-center">
                                        <span class="font-semibold">Activity:</span>
                                        <span class="ml-auto">{{$reservation->activity->title}}</span>
                                    </div>
                                </div>
                            @else
                                <div
                                    class="flex flex-col px-2 pb-2 text-sm
                                    {{
										isset($this->user_reservations[$key +1]) &&
									    $this->user_reservations[$key +1]->eventDay->date->timestamp === $last_reservation_date->timestamp
									    ? "border-l border-r" : "border-l border-r border-b rounded-b"
									}}
                                    ">
                                    <div class="flex items-center">
                                        <span class="font-semibold">Activity:</span>
                                        <span class="ml-auto">{{$reservation->activity->title}}</span>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endif
                </div>

            </div>
        </div>
    </div>
</div>
