# Reservation date-time range restriction

The "Reservation date-time range restriction" feature in OpenForum allows administrators to define a date and time range that users can use to reserve a spot for one or more activities in a given day.

When reserving a spot, users must reserve a spot (or mark themselves as absent) for each of the days of the event. This ensures that the user is committed to attending the event for all the selected days.

In addition, users cannot reserve spots in events held in a different location on the same day. For example, if User A reserves a spot held in location L on day D, the same user, namely A, can reserve other spots for other activities but all these activities for the day D must be held in L.

Furthermore, users cannot reserve spots for events with overlapping time periods. The period restriction functionality is as accurate as a minute, which means that users cannot reserve spots for activities that overlap by even a minute. For example, if User A reserves a spot for activity C starting at 10:30 and ending at 13:00, they cannot reserve a spot for an activity D that starts at 12:30 and ends at 16:00. However, they can reserve a spot for an activity E starting at 08:00 and ending at 10:25.
