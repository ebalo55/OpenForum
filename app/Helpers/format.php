<?php

use App\Enum\DatetimeFormatVariation;
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

if (!function_exists("format_date")) {
    /**
     * Format the given datetime instance using the common platform datetime format definitions
     *
     * @param Carbon $datetime
     *
     * @return string
     */
    function format_date(Carbon $datetime): string {
        return $datetime->format(config("student-forum.date_format"));
    }
}

if (!function_exists("make_from_format")) {
    /**
     * Create a new datetime instance from the given datetime string
     *
     * @param string $datetime
     * @param DatetimeFormatVariation $format_variation
     *
     * @return Carbon
     */
    function make_from_format(
        string                  $datetime,
        DatetimeFormatVariation $format_variation = DatetimeFormatVariation::DATETIME,
    ): Carbon {
        return match ($format_variation) {
            DatetimeFormatVariation::DATETIME => Carbon::createFromFormat(
                config("student-forum.datetime_format"),
                $datetime,
            ),
            DatetimeFormatVariation::DATE     => Carbon::createFromFormat(
                config("student-forum.date_format"),
                $datetime,
            ),
            DatetimeFormatVariation::TIME     => Carbon::createFromFormat(
                config("student-forum.time_format"),
                $datetime,
            ),
        };
    }
}
