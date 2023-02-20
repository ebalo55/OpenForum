<?php

namespace App\Http\Livewire\Users;

use App\Enum\InternalRoles;
use App\Facade\AuthorizationServiceFacade;
use App\Facade\LivewireBannerServiceFacade;
use App\Facade\LivewireScrollServiceFacade;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Details extends Component {
    public User $user;

    /**
     * Assign the default user role to a given user
     *
     */
    public
    function downgrade() {
        if (!$this->user->hasRole(InternalRoles::SUPER_ADMIN())) {
            AuthorizationServiceFacade::assignDefaultUserRole($this->user);
        }

        LivewireBannerServiceFacade::from($this)
                                   ->success("User downgraded to the basic 'user' role");
        LivewireScrollServiceFacade::from($this)
                                   ->scrollToTop();
    }

    /**
     * Assign the default admin role to a given user
     *
     */
    public
    function elevate() {
        if (!$this->user->hasRole(InternalRoles::SUPER_ADMIN())) {
            AuthorizationServiceFacade::assignDefaultAdminRole($this->user);
        }

        LivewireBannerServiceFacade::from($this)
                                   ->success("User elevated to the 'admin' role");
        LivewireScrollServiceFacade::from($this)
                                   ->scrollToTop();
    }

    /**
     * @return Collection<Reservation>
     */
    public
    function getUserReservationsProperty(): Collection {
        return $this->user
            ->reservations()
            ->join(
                "event_days",
                "event_days.id",
                "=",
                "reservations.event_day_id",
            )
            ->with(["eventDay", "activity"])
            ->select(["event_days.date", "reservations.*"])
            ->orderBy("event_days.date")
            ->groupBy(
                "reservations.id",
                "reservations.event_day_id",
                "event_days.date",
            )
            ->get();
    }

    public
    function render(): Factory|View|Application {
        return view('livewire.user.details');
    }

    public
    function rules(): array {
        return [
            "user.name"  => "required|string|max:255",
            "user.email" => "required|string|max:255|email:rfc",
        ];
    }

    public
    function save(): void {
        $this->validate();

        $this->user->save();
        $this->user->sendEmailVerificationNotification();

        LivewireBannerServiceFacade::from($this)
                                   ->success("User updated successfully");
        LivewireScrollServiceFacade::from($this)
                                   ->scrollToTop();
    }

    /**
     * Apply realtime validation only to the changed property
     *
     * @param $propertyName
     *
     * @return void
     */
    public
    function updated(
        $propertyName,
    ): void {
        $this->validateOnly($propertyName);
    }
}
