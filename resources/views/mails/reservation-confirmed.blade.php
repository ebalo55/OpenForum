<x-mail::message>
    # Introduction

    The body of your message.

    <x-mail::button :url="''">
        Button Text
    </x-mail::button>

    Thanks,<br>
    {{ app(\App\Settings\GeneralSettings::class)->site_name }}
</x-mail::message>
