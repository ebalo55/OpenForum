<x-mail::layout>
{{-- Header --}}
<x-slot:header>
<x-mail::header :url="config('app.url')">
{{ app(\App\Settings\GeneralSettings::class)->site_name }}
</x-mail::header>
</x-slot:header>

# Your reservations have been saved
We're happy to confirm you that your reservation have been saved successfully.
Here is a brief recap of the activities you've reserved:

### You've reserved {{$reservation_count}} spots in {{$unique_days_count}} days
<x-mail::table>
| Day | Location | Activity | Starts at | Ends at |
| :---: | :--- | :--- | :--- | :--- |
@foreach($ordered_reservations as $reservation)
@php
/** @var \App\Models\Reservation $reservation */
@endphp
| {{format_date($reservation->eventDay->date)}} | {{$reservation->eventDay->location}} | {{$reservation->activity->title}} | {{format_time($reservation->activity->starting_at)}} | {{format_time($reservation->activity->ending_at)}} |
@endforeach
</x-mail::table>

{{-- Subcopy --}}
@isset($subcopy)
<x-slot:subcopy>
<x-mail::subcopy>
{{ $subcopy }}
</x-mail::subcopy>
</x-slot:subcopy>
@endisset

{{-- Footer --}}
<x-slot:footer>
<x-mail::footer>
© {{ date('Y') }} {{ app(\App\Settings\GeneralSettings::class)->site_name }}. @lang('All rights reserved.')
<x-mail::subcopy>
Powered by <a href="https://github.com/ebalo55/OpenForum" target="_blank">OpenForum</a>
</x-mail::subcopy>
</x-mail::footer>
</x-slot:footer>
</x-mail::layout>
