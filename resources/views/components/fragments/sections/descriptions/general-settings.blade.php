<div>
    <p class="text-sm">
        General settings defines the global behaviour of the backend and should be considered as the
        first thing to set-up when defining the event.
    </p>
    <x-html.h3>
        General settings definitions
    </x-html.h3>
    <x-html.ul>
        <li>
            When the backend will allow subscriptions to the event to start and end.
            This is usually limited to a well-defined date-time range.
            <br/>
            Subscription before or after the defined time-range will not be handled and result in an
            error when requesting via API.
        </li>
        <li>
            The website name, this setting is not strictly required but if used allows to define and
            edit the front-end main title from the backend without the need to re-deploy or change
            anything on the front-end.
        </li>
    </x-html.ul>
</div>
