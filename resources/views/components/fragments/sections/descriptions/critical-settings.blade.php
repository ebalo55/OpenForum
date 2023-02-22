<div>
    <p class="text-sm">
        Critical settings defines the global behaviour of the backend but may result in unwanted side
        effects and should be carefully setup.
    </p>
    <x-html.h3>
        Critical settings definitions
    </x-html.h3>
    <x-html.ul>
        <li>
            When the event starts and ends, this value is used to define the number of available days for the
            creation of events.
        </li>
        <li>
            Which will be the locations where the events will take place.
        </li>
    </x-html.ul>
    <x-html.h3>
        Side effect notes
    </x-html.h3>
    <x-html.ul>
        <li>
            Whenever one of the values in the form aside is modified all the days and related events gets
            dropped and substituted with new, freshly created day-location pairs.
        </li>
        <li>
            There is no way to recover the deleted events title, descriptions and related data if they are
            removed via the modification of the critical properties.
        </li>
    </x-html.ul>
</div>
