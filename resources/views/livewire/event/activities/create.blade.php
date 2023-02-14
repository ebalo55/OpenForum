<div>
    <x-slot name="header">
        <div class="flex items-center">
            <x-button class="px-2"
                      :variant="\App\Enum\ButtonVariant::LINK"
                      :url="route('events.activities', ['event' => $event])"
            >
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15 19.9201L8.47997 13.4001C7.70997 12.6301 7.70997 11.3701 8.47997 10.6001L15 4.08008"
                          stroke="currentColor"
                          stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </x-button>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight ml-1">
                {{ __('Activity creation') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-banner.success/>
            <x-banner.error/>
            <livewire:event.activities.editor :activity="$activity" :event_day="$event"/>
        </div>
    </div>
</div>
