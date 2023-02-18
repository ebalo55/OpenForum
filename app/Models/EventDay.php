<?php

namespace App\Models;

use App\Contracts\ReservableModelContract;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\PrefixedIds\Models\Concerns\HasPrefixedId;

/**
 * App\Models\EventDay
 *
 * @property int $id
 * @property string|null $prefixed_id
 * @property string $nickname
 * @property \Illuminate\Support\Carbon $date
 * @property string $location
 * @property int|null $max_reservation
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Activity> $activities
 * @property-read int|null $activities_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Reservation> $reservations
 * @property-read int|null $reservations_count
 * @method static \Database\Factories\EventDayFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|EventDay newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EventDay newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EventDay query()
 * @method static \Illuminate\Database\Eloquent\Builder|EventDay whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventDay whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventDay whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventDay whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventDay whereMaxReservation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventDay whereNickname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventDay wherePrefixedId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventDay whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class EventDay extends Model implements ReservableModelContract {
	use HasFactory, HasPrefixedId;

	protected $casts = [
		"date" => "date",
	];
	protected $guarded = [];

	public
	function activities(): HasMany {
		return $this->hasMany(Activity::class);
	}

	/**
	 * Get the route key for the model.
	 */
	public
	function getRouteKeyName(): string {
		return config("prefixed-ids.prefixed_id_attribute_name");
	}

	/**
	 * Get the number of maximum reservation number associated with the model
	 *
	 * @return int
	 */
	public
	function maxReservations(): int {
		return $this->max_reservation ?? 0;
	}

	/**
	 * Get the current reservation number of the model
	 *
	 * @return int
	 */
	public
	function reservationCount(): int {
		return $this->reservations_count ?? 0;
	}

	public
	function reservations(): HasMany {
		return $this->hasMany(Reservation::class);
	}

	/**
	 * Get the activities_count attribute, loading it if not already done
	 *
	 * @return Attribute
	 */
	protected
	function activitiesCount(): Attribute {
		return Attribute::make(
            get: fn(?int $value) => $value ?? $this->loadCount("activities")->activities_count,
		);
	}

	/**
	 * Get the reservations_count attribute, loading it if not already done
	 *
	 * @return Attribute
	 */
	protected
	function reservationsCount(): Attribute {
		return Attribute::make(
            get: fn(?int $value) => $value ?? $this->loadCount("reservations")->reservations_count,
		);
	}
}
