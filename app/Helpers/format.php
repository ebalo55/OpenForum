<?php

use Carbon\Carbon;

if (!function_exists("format")) {
    /**
     * Format the given datetime instance using the common platform datetime format definitions
     *
     * @param Carbon $datetime
     *
     * @return string
     */
    function format(Carbon $datetime): string {
        return $datetime->format(config("student-forum.datetime_format"));
    }
}

if (!function_exists("format_time")) {
    /**
     * Format the given datetime instance using the common platform datetime format definitions
     *
     * @param Carbon $datetime
     *
     * @return string
     */
    function format_time(Carbon $datetime): string {
        return $datetime->format(config("student-forum.time_format"));
    }
}

if (!function_exists("make_from_format")) {
    /**
     * Create a new datetime instance from the given datetime string
     *
     * @param string $datetime
     *
     * @return Carbon
     */
    function make_from_format(string $datetime): Carbon {
        return Carbon::createFromFormat(
            config("student-forum.datetime_format"),
            $datetime,
        );
    }
}
