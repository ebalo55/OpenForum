<x-jet-form-section submit="import"
                    :with_bordered_card="true"
                    x-data
                    form_wrapper_classes="h-full"
                    form_classes="h-full flex flex-col"
                    form_container_classes="h-full"
                    form_grid_classes="h-full"
                    x-data="{is_overlay_visible: false, file_loaded: false }"
>
    <x-slot name="title">
        User's import
    </x-slot>
    <x-slot name="description">
        <p class="text-sm text-gray-600">
            As the access to the events should be limited only to allowed people the way we achieve this is by defining
            a whitelist of allowed people.
            From now on we assume that
            <code class="text-xs text-gray-600 tracking-wide bg-gray-100 p-1 rounded">people</code> and
            <code class="text-xs text-gray-600 tracking-wide bg-gray-100 p-1 rounded">users</code> means the same.
        </p>
        <p class="text-sm text-gray-600 mt-2">
            <strong>How to define a whitelist?</strong>
        </p>
        <p class="text-sm text-gray-600">
            The definition of a whitelist is an easy process as the only thing needed is a spreadsheet, namely a
            <code class="text-xs text-gray-600 tracking-wide bg-gray-100 p-1 rounded">CSV</code> or
            <code class="text-xs text-gray-600 tracking-wide bg-gray-100 p-1 rounded">Excel</code> document.
        </p>
        <p class="text-sm text-gray-600">
            In order for the import to work the spreadsheet must contain at least this two columns:
        </p>
        <ul class="text-sm text-gray-600 list-disc pl-6">
            <li>
                <code class="text-xs text-gray-600 tracking-wide bg-gray-100 p-1 rounded">Full name</code>:
                Contains the definition of the user's full name. It's important that the whole name is included in this
                field as it will be used as a password derivation value.
            </li>
            <li>
                <code class="text-xs text-gray-600 tracking-wide bg-gray-100 p-1 rounded">Birth date</code>:
                Contains the definition of the user's birthdate. This field <strong>must</strong> follow the pre-defined
                date format. A value that does not follow the predefined format will result in the whole row not to be
                imported.
                <br>
                The required format is
                <code class="text-xs text-gray-600 tracking-wide bg-gray-100 p-1 rounded">d/m/Y</code>, the following
                are valid and invalid samples values:
                <ul class="text-sm text-gray-600 list-disc pl-6">
                    <li class="my-1">
                        <code class="text-xs text-gray-600 tracking-wide bg-gray-100 p-1 rounded">05/05/2000</code>:
                        <span class="text-green-500 font-semibold">Valid</span>
                    </li>
                    <li class="my-1">
                        <code class="text-xs text-gray-600 tracking-wide bg-gray-100 p-1 rounded">31/12/1954</code>:
                        <span class="text-green-500 font-semibold">Valid</span>
                    </li>
                    <li class="my-1">
                        <code class="text-xs text-gray-600 tracking-wide bg-gray-100 p-1 rounded">29/02/2004</code>:
                        <span class="text-green-500 font-semibold">Valid</span>
                    </li>
                    <li class="my-1">
                        <code class="text-xs text-gray-600 tracking-wide bg-gray-100 p-1 rounded">78/01/1935</code>:
                        <span class="text-red-500 font-semibold">Invalid</span>
                    </li>
                    <li class="my-1">
                        <code class="text-xs text-gray-600 tracking-wide bg-gray-100 p-1 rounded">02/33/2045</code>:
                        <span class="text-red-500 font-semibold">Invalid</span>
                    </li>
                    <li class="my-1">
                        <code class="text-xs text-gray-600 tracking-wide bg-gray-100 p-1 rounded">00/00/10001</code>:
                        <span class="text-red-500 font-semibold">Invalid</span>
                    </li>
                </ul>
            </li>
        </ul>
        <p class="text-sm text-gray-600">
            It is not important the order the columns appear in the document nor if they are written in any specific
            case,
            they must only exist and be named as stated before.
        </p>
    </x-slot>
    <x-slot name="form">
        <input type="file" name="file" class="hidden" id="file-upload"
               wire:model="users_import_file"
               @change="file_loaded = event.target.files[0].name"
               accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application/csv,text/csv,text/plain"/>
        <div
            class="col-span-full min-h-full border-2 border-dashed flex flex-col items-center justify-center cursor-pointer relative group"
            @click="document.getElementById('file-upload').click()"
            @mouseenter="is_overlay_visible = true"
            @mouseleave="is_overlay_visible = false"
            @dragover.prevent="is_overlay_visible = true"
            @dragleave.prevent="is_overlay_visible = false"
            @drop="is_overlay_visible = false"
            @drop.prevent="
                if(event.dataTransfer.files.length === 1) {
                    const file = event.dataTransfer.files[0];
                    console.log(file)
                    $wire.upload(
                        'users_import_file',
                        file,
                        (uploaded_filename) => {
                            file_loaded = file.name
                            // success
                        },
                        () => {
                            // error
                        },
                        (e) => {
                            // progress
                            console.log(e.detail.progress)
                        }
                    )
                }
            "
        >
            <div x-show="!file_loaded">
                <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_jxejLa8flt.json"
                               background="transparent"
                               speed=".75"
                               loop
                               autoplay
                               class="h-96 pointer-events-none"
                ></lottie-player>
            </div>
            <div
                class="absolute inset-0 bg-white bg-opacity-80 flex items-center justify-center pointer-events-none"
                x-transition.300ms
                x-show="is_overlay_visible"
            >
                <span class="text-xl font-semibold tracking-widest">Drop your file here!</span>
            </div>
            <div x-show="file_loaded" class="flex flex-col items-center justify-center">
                <img
                    src="{{ Vite::image("document-text.svg") }}"
                    alt="document"
                    class="mb-6 h-24 w-24"
                />
                <div
                    class="text-xl font-semibold tracking-widest"
                    x-text="file_loaded"></div>
            </div>
            <x-jet-input-error for="users_import_file"/>
        </div>
    </x-slot>
    <x-slot name="actions">
        <x-jet-button class="bg-sky-500 hover:bg-sky-600 tracking-normal text-sm">
            Start import
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
