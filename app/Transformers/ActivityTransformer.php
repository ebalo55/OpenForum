<?php

namespace App\Transformers;

use App\Enum\Permissions\Classes\Event;
use App\Models\Activity;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;
use League\Fractal\TransformerAbstract;
use Spatie\LaravelMarkdown\MarkdownRenderer;
use Symfony\Component\HttpFoundation\Response;

class ActivityTransformer extends TransformerAbstract {
    /**
     * List of resources possible to include
     *
     * @var array
     */
    protected array $availableIncludes = [
        "event",
        "reservations",
    ];
    /**
     * List of resources to automatically include
     *
     * @var array
     */
    protected array $defaultIncludes = [
        //
    ];

    /**
     * Include the event in the response
     *
     * @param Activity $activity
     *
     * @return Item
     */
    public
    function includeEvent(
        Activity $activity,
    ): Item {
        return $this->item(
            $activity->eventDay,
            new EventTransformer(),
        );
    }

    /**
     * Include the reservations in the response
     *
     * @param Activity $activity
     *
     * @return Collection
     */
    public
    function includeReservations(
        Activity $activity,
    ): Collection {
        abort_unless(
            request()->user()->can(Event::EXPORT()),
            Response::HTTP_FORBIDDEN,
        );
        return $this->collection(
            $activity->reservations,
            new ReservationTransformer(),
        );
    }

    /**
     * A Fractal transformer.
     *
     * @param Activity $activity
     *
     * @return array
     */
    public
    function transform(
        Activity $activity,
    ): array {
        return [
            "id"                     => $activity->prefixed_id,
            "starting_at"            => format_time($activity->starting_at),
            "ending_at"              => format_time($activity->ending_at),
            "title"                  => $activity->title,
            "available_reservations" => $activity->max_reservation - $activity->reservations()->count(),
            "description"            => app(MarkdownRenderer::class)->toHtml($activity->markup),
        ];
    }
}
