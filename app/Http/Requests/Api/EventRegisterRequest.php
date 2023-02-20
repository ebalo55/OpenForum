<?php

namespace App\Http\Requests\Api;

use App\Facade\EventDayServiceFacade;
use App\Models\Activity;
use App\Models\EventDay;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EventRegisterRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     */
    public
    function authorize(): bool {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, Rule|array|string>
     */
    public
    function rules(): array {
        return [
            "reservations"                           => [
                "required",
                "array",
                "size:" . EventDayServiceFacade::countUniqueEvents(),
            ],
            "reservations.*.date"                    => [
	            "required",
	            "string",
	            "distinct:strict",
	            "date_format:" . config("open-forum.date_format"),
	            /*Rule::exists(
					(new EventDay())->getTable(),
					"date",
				),*/
            ],
            "reservations.*.location"                => [
                "required",
                "string",
                Rule::exists(
                    (new EventDay())->getTable(),
                    "location",
                ),
            ],
            "reservations.*.absent"                  => "required_without:reservations.*.activity_reservations|boolean",
            "reservations.*.activity_reservations"   => "required_without:reservations.*.absent|array|min:1",
            "reservations.*.activity_reservations.*" => [
                "string",
                Rule::exists(
                    (new Activity())->getTable(),
                    config("prefixed-ids.prefixed_id_attribute_name"),
                ),
            ],
        ];
    }
}
