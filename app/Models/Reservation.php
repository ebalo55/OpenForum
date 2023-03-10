<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\PrefixedIds\Models\Concerns\HasPrefixedId;

/**
 * App\Models\Reservation
 *
 * @property int $id
 * @property string|null $prefixed_id
 * @property int $user_id
 * @property int $event_day_id
 * @property int $activity_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Activity|null $activity
 * @property-read \App\Models\EventDay|null $eventDay
 * @property-read \App\Models\User|null $user
 * @method static \Database\Factories\ReservationFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation whereActivityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation whereEventDayId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation wherePrefixedId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation whereUserId($value)
 * @mixin \Eloquent
 */
class Reservation extends Model {
    use HasFactory, HasPrefixedId;

    protected $guarded = [];

    public
    function activity(): BelongsTo {
        return $this->belongsTo(Activity::class);
    }

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
    function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
