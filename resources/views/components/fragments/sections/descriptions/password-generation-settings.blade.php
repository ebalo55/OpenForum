<div>
    <p class="text-sm">
        Password generation settings allow you to define dynamically a secure password assigned to a user.
    </p>
    <x-html.h3>
        Dynamic password generation benefits
    </x-html.h3>
    <x-html.ul>
        <li>
            The fragments composing the password can be freely shared publicly.
        </li>
        <li>
            Passwords may change from year to year.
        </li>
        <li>
            The passwords can be easily recovered knowing personal user's information and setup data.
        </li>
    </x-html.ul>
    <x-html.h3>
        Sample generation
    </x-html.h3>
    <x-html.ul>
        <li class="my-1">
            <x-code.inline>Full name</x-code.inline>
            : {{$fake_name}}
        </li>
        <li class="my-1">
            <x-code.inline>Birth date</x-code.inline>
            : {{$fake_dob}}
        </li>
        <li class="my-1">
            <x-code.inline>Generated password</x-code.inline>
            : {{$generated_password}}
        </li>
    </x-html.ul>
</div>
