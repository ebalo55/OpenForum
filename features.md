# Features

<details>

<summary>Summary</summary>

#### [Dynamic event days and location definition](features.md#dynamic-event-days-and-location-definition-1)

#### [Reservation date-time range restriction](features.md#reservation-date-time-range-restriction-1)

#### [Whitelisted users](features.md#whitelisted-users-1)

#### [Dynamic, predictable, password generation for whitelisted users](features.md#dynamic-predictable-password-generation-for-whitelisted-users-1)

#### [Email verification and reservation confirmation notification](features.md#email-verification-and-reservation-confirmation-notification-1)

</details>

### Dynamic event days and location definition

The "Dynamic event days and location definition" feature in OpenForum allows administrators to define a date range and multiple locations for an event.

To define a date range for the event, simply enter a start date and an end date. The date range must be sequential, meaning that if the date range starts on May 5 and ends on May 10, all the days in that range will be included in the event date range. This ensures that the event is held on consecutive days.

In addition to defining a date range, administrators can also define multiple locations for the event. For example, some activities can be held in a theatre while others can be held on a college campus. This allows the event to be held in multiple locations at the same time.

Defining days and locations automatically generates day-location pairs for each of the defined days and locations. This allows for the individual definition of activities for each day and location, creating a unique identifier for each day-location pair. This ensures that each activity is assigned to the correct day and location, making it easy for users to find and register for activities.

### Reservation date-time range restriction

The "Reservation date-time range restriction" feature in OpenForum allows administrators to define a date and time range that users can use to reserve a spot for one or more activities in a given day.

When reserving a spot, users must reserve a spot (or mark themselves as absent) for each of the days of the event. This ensures that the user is committed to attending the event for all the selected days.

In addition, users cannot reserve spots in events held in a different location on the same day. For example, if User A reserves a spot held in location L on day D, the same user, namely A, can reserve other spots for other activities but all these activities for the day D must be held in L.

Furthermore, users cannot reserve spots for events with overlapping time periods. The period restriction functionality is as accurate as a minute, which means that users cannot reserve spots for activities that overlap by even a minute. For example, if User A reserves a spot for activity C starting at 10:30 and ending at 13:00, they cannot reserve a spot for an activity D that starts at 12:30 and ends at 16:00. However, they can reserve a spot for an activity E starting at 08:00 and ending at 10:25.

### Whitelisted users

The "Whitelisted users" feature in OpenForum allows administrators to define a list of users allowed to reserve spots in the event.

Non-whitelisted users cannot reserve a spot in the event. This means that if no user is whitelisted, no one will be able to reserve a spot in the event. Only users who are on the whitelist can reserve spots.

Furthermore, whitelisted users must authenticate themselves in order to be able to reserve a spot in the event. This helps ensure that only authorized users are able to access and reserve spots. Each user must provide and verify their email before being able to reserve a spot in the event. This further ensures that the user is authorized to access the event and prevents unauthorized users from accessing the event.

### Dynamic, predictable, password generation for whitelisted users

OpenForum allows administrators to define a set of rules that can be used to dynamically generate passwords for whitelisted users. The password generation process uses two fields for each user: their full name and date of birth. The generated passwords are predictable and will never need to be communicated to the user, as they can be computed manually if the user knows the rule set used to generate it originally. The available rules can be extended to make the passwords more difficult to guess.

Notes:

* Modifying the rule set after importing users will not change their passwords.
* Single rules can be repeated any number of times in the rule set.
* No custom rules can be defined.
* Files used for user import are deleted immediately after the import is completed.
* As the creation of dynamic passwords and their hashing may result in a resource-intensive process, the import of users is an asynchronous process.
* Only an import at a time is allowed.

### Email verification and reservation confirmation notification

This feature requires all users to provide an email and confirm it before they are allowed to reserve any spot for the event.

The email verification process has a double function. First, it is used to grant user security as it ensures only real people can reserve spots. Second, the email is used to communicate with the user by sending notifications, such as the reservation confirmation notification that is sent each time a reservation is completed.

When a user reserves a spot, the system will send a reservation confirmation notification to the user's verified email address. This notification will include all the details of the reservation, such as the day, time, and location of the reserved activity.

This feature ensures that users have a way to verify their reservation and keep track of all their reserved activities. It also provides the event administrators with a way to communicate with users and keep them informed about any changes or updates to the event schedule.
