<?php

namespace Tests\Feature\Transformers;

use App\Models\Activity;
use App\Models\Reservation;
use App\Models\User;
use App\Transformers\ActivityTransformer;
use Spatie\LaravelMarkdown\MarkdownRenderer;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Tests\TestCase;

class ActivityTransformerTest extends TestCase {

    public
    function test_correctly_aborts_reservations_inclusion_if_not_having_export_permission(): void {
        $activity = Activity::factory()->has(Reservation::factory(2))->create();

        $this->actingAs(User::factory()->create());

        $this->expectException(HttpException::class);
        (new ActivityTransformer())->includeReservations($activity);
    }

    public
    function test_correctly_includes_event(): void {
        $activity = Activity::factory()->create();

        $this->assertTrue($activity->eventDay->is((new ActivityTransformer())->includeEvent($activity)->getData()));
    }

    public
    function test_correctly_includes_reservations(): void {
        $activity = Activity::factory()->has(Reservation::factory(2))->create();

        $this->actingAs(User::first());

        foreach ((new ActivityTransformer())->includeReservations($activity)->getData() as $key => $data) {
            $this->assertTrue($activity->reservations[$key]->is($data));
        }
    }

    public
    function test_correctly_transforms_data(): void {
        $activity = Activity::factory()->create();

        $this->assertEquals(
            [
                "id"                     => $activity->prefixed_id,
                "starting_at"            => format_time($activity->starting_at),
                "ending_at"              => format_time($activity->ending_at),
                "title"                  => $activity->title,
                "available_reservations" => $activity->max_reservation - $activity->reservations()->count(),
                "description"            => app(MarkdownRenderer::class)->toHtml($activity->markup),
            ],
            (new ActivityTransformer())->transform($activity),
        );
    }
}
