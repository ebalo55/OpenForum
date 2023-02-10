<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Settings editor') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-banner.success/>
            <livewire:settings.general-settings-form/>
            <x-jet-section-border/>
            <livewire:settings.password-generation-form/>
        </div>
    </div>
</div>
