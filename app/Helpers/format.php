<?php

use App\Enum\DatetimeFormatVariation;
use Carbon\Carbon;

// @codeCoverageIgnoreStart
if (!function_exists("format")) {
	// @codeCoverageIgnoreEnd
    /**
     * Format the given datetime instance using the common platform datetime format definitions
     *
     * @param Carbon $datetime
     *
     * @return string
     */
    function format(Carbon $datetime): string {
        return $datetime->format(config("open-forum.datetime_format"));
    }
}

// @codeCoverageIgnoreStart
if (!function_exists("format_time")) {
	// @codeCoverageIgnoreEnd
    /**
     * Format the given datetime instance using the common platform datetime format definitions
     *
     * @param Carbon $datetime
     *
     * @return string
     */
    function format_time(Carbon $datetime): string {
        return $datetime->format(config("open-forum.time_format"));
    }
}

// @codeCoverageIgnoreStart
if (!function_exists("format_date")) {
	// @codeCoverageIgnoreEnd
    /**
     * Format the given datetime instance using the common platform datetime format definitions
     *
     * @param Carbon $datetime
     *
     * @return string
     */
    function format_date(Carbon $datetime): string {
        return $datetime->format(config("open-forum.date_format"));
    }
}

// @codeCoverageIgnoreStart
if (!function_exists("make_from_format")) {
	// @codeCoverageIgnoreEnd
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
                config("open-forum.datetime_format"),
                $datetime,
            ),
            DatetimeFormatVariation::DATE     => Carbon::createFromFormat(
                config("open-forum.date_format"),
                $datetime,
            ),
            DatetimeFormatVariation::TIME     => Carbon::createFromFormat(
                config("open-forum.time_format"),
                $datetime,
            ),
        };
    }
}
