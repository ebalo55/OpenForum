@props(["message" => null, "event_listener" => "banner", "show" => null])

<div {{ $attributes->merge([
		"class" => "relative col-span-full w-full rounded-0 p-4 font-semibold bg-white border flex" . ($show ?: " hidden")
     ]) }}
     x-data="{{ json_encode(["show" => $show ?? false, "message" => null]) }}"
     x-init="
                document.addEventListener('{{$event_listener}}', event => {
                    $el.classList.remove('hidden')
                    message = event.detail.message;
                    show = event.detail?.show ?? true;

                    // restart all lottie animations in the current element if exists
                    $el.querySelectorAll('lottie-player').forEach((player) => player.seek(0))

                    // hide the banner after the given timeout
                    setTimeout(() => {show = !show }, event.detail?.timeout ?? 5000)
                });
          "
     x-show="show"
     x-transition.duration.300ms
>
    {{$message}}
    <span x-html="message"></span>
</div>
