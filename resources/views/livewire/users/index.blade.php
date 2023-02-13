<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-banner.success/>
            <x-banner.error/>
            <x-tabs :active_tab="0">
                <x-tabs.header>
                    @foreach($this->tab_names as $tab_name)
                        <x-tabs.header.tab :tab_id="$loop->index">
                            {{$tab_name}}
                        </x-tabs.header.tab>
                    @endforeach
                </x-tabs.header>
                <x-tabs.content :tab_id="0">
                    <livewire:user-table/>
                </x-tabs.content>
                <x-tabs.content :tab_id="1">
                    <livewire:users.import/>
                </x-tabs.content>
            </x-tabs>
        </div>
    </div>
</div>
