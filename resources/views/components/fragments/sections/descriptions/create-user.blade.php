<p class="text-sm">
    As the access to the events should be limited only to allowed people the way we achieve this is by defining
    a whitelist of allowed people.
    From now on we assume that
    <x-code.inline>people</x-code.inline>
    and
    <x-code.inline>users</x-code.inline>
    means the same.
</p>
<x-html.h3>
    How to define a whitelist?
</x-html.h3>
<p class="text-sm">
    The definition of a whitelist is an easy process as the only thing needed is a spreadsheet, namely a
    <x-code.inline>CSV</x-code.inline>
    or
    <x-code.inline>Excel</x-code.inline>
    document.
</p>
<x-html.h3>
    Requirements for a working import
</x-html.h3>
<x-html.ul>
    <li>
        <x-code.inline>Full name</x-code.inline>
        :
        Contains the definition of the user's full name. It's important that the whole name is included in this
        field as it will be used as a password derivation value.
    </li>
    <li>
        <x-code.inline>Birth date</x-code.inline>
        :
        Contains the definition of the user's birthdate. This field <strong>must</strong> follow the pre-defined
        date format. A value that does not follow the predefined format will result in the whole row not to be
        imported.
        <br>
        The required format is
        <x-code.inline>d/m/Y</x-code.inline>
        , the following
        are valid and invalid samples values:
        <x-html.ul>
    <li class="my-1">
        <x-code.inline>05/05/2000</x-code.inline>
        :
        <span class="text-green-500 font-semibold">Valid</span>
    </li>
    <li class="my-1">
        <x-code.inline>31/12/1954</x-code.inline>
        :
        <span class="text-green-500 font-semibold">Valid</span>
    </li>
    <li class="my-1">
        <x-code.inline>29/02/2004</x-code.inline>
        :
        <span class="text-green-500 font-semibold">Valid</span>
    </li>
    <li class="my-1">
        <x-code.inline>78/01/1935</x-code.inline>
        :
        <span class="text-red-500 font-semibold">Invalid</span>
    </li>
    <li class="my-1">
        <x-code.inline>02/33/2045</x-code.inline>
        :
        <span class="text-red-500 font-semibold">Invalid</span>
    </li>
    <li class="my-1">
        <x-code.inline>00/00/10001</x-code.inline>
        :
        <span class="text-red-500 font-semibold">Invalid</span>
    </li>
</x-html.ul>
</li>
</x-html.ul>
<p class="text-sm">
    It is not important the order the columns appear in the document nor if they are written in any specific
    case,
    they must only exist and be named as stated before.
</p>
