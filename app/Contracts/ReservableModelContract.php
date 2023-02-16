<?php

namespace App\Contracts;

interface ReservableModelContract {
    /**
     * Get the number of maximum reservation number associated with the model
     *
     * @return int
     */
    public
    function maxReservations(): int;

    /**
     * Get the current reservation number of the model
     *
     * @return int
     */
    public
    function reservationCount(): int;
}
