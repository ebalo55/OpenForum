import flatpickr from "flatpickr"
import "flatpickr/dist/flatpickr.min.css"
import "flatpickr/dist/themes/airbnb.css"

flatpickr("#registration_available_from", {
    enableTime: true,
    time_24hr: true,
    dateFormat: "d/m/Y H:i:S",
})
flatpickr("#registration_available_to", {
    enableTime: true,
    time_24hr : true,
    dateFormat: "d/m/Y H:i:S",
})
flatpickr("#forum_days", {
    mode      : "range",
    minDate   : "today",
    dateFormat: "d/m/Y",
})
