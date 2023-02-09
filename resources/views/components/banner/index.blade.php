@props(["message" => null, "event_listener" => ""])

<div {{ $attributes->merge([
		"class" => "relative col-span-full w-full rounded-0 p-4 font-semibold bg-white border flex " . (is_null($message) && "hidden"),
     ]) }}
     x-init="
                document.addEventListener('{{$event_listener}}', event => {
                    message = event.detail.message;

                    $el.querySelectorAll('lottie-player').forEach((player) => player.seek(0))
                });
          "
     x-data="{{ json_encode(["message" => null]) }}"
     :class="{'hidden': !message}"
>
    {{$message}}
    <span x-html="message"></span>
</div>
