<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\PrefixedIds\Models\Concerns\HasPrefixedId;

/**
 * App\Models\Activity
 *
 * @property int $id
 * @property string|null $prefixed_id
 * @property int $event_day_id
 * @property string $title
 * @property string $markup
 * @property \Illuminate\Support\Carbon $starting_at
 * @property \Illuminate\Support\Carbon $ending_at
 * @property int|null $max_reservation
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\EventDay|null $eventDay
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Reservation> $reservations
 * @property-read int|null $reservations_count
 * @method static \Database\Factories\ActivityFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Activity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Activity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Activity query()
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereEndingAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereEventDayId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereMarkup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereMaxReservation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity wherePrefixedId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereStartingAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Activity extends Model {
    use HasFactory, HasPrefixedId;

    protected $casts = [
        "starting_at" => "datetime",
        "ending_at"   => "datetime",
    ];
    protected $guarded = [];

    public
    function eventDay(): BelongsTo {
        return $this->belongsTo(EventDay::class);
    }

    /**
     * Get the route key for the model.
     */
    public
    function getRouteKeyName(): string {
        return config("prefixed-ids.prefixed_id_attribute_name");
    }

    public
    function reservations(): HasMany {
        return $this->hasMany(Reservation::class);
    }
}
