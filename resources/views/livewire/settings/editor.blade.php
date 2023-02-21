<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Settings editor') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-banner.success/>
            <x-banner.error/>
            <x-tabs :active_tab="0">
                <x-tabs.header>
                    <x-tabs.header.tab :tab_id="0">
                        General
                    </x-tabs.header.tab>
                    <x-tabs.header.tab :tab_id="1">
                        Password generation
                    </x-tabs.header.tab>
                </x-tabs.header>
                <x-tabs.content :tab_id="0">
                    <livewire:settings.general-settings-form/>
                </x-tabs.content>
                <x-tabs.content :tab_id="1">
                    <livewire:settings.password-generation-form/>
                </x-tabs.content>
            </x-tabs>
        </div>
    </div>
</div>
