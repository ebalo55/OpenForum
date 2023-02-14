import flatpickr from "flatpickr"
import "flatpickr/dist/flatpickr.min.css"
import "flatpickr/dist/themes/airbnb.css"

flatpickr("#activity_starting_at", {
    enableTime: true,
    noCalendar: true,
    time_24hr : true,
    dateFormat: "H:i:S",
})
flatpickr("#activity_ending_at", {
    enableTime: true,
    noCalendar: true,
    time_24hr : true,
    dateFormat: "H:i:S",
})
