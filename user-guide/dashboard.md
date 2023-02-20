# Dashboard

<details>

<summary>In this page</summary>

[Site name](dashboard.md#site-name)

[Event dates](dashboard.md#event-dates)

[Registration date-time range](dashboard.md#registration-date-time-range)

[Total imported users](dashboard.md#total-imported-users)

[Latest import errors](dashboard.md#latest-import-errors)

</details>

<figure><img src="../.gitbook/assets/image (4) (1).png" alt=""><figcaption><p>OpenForum - Dashboard</p></figcaption></figure>

The Dashboard is the main control panel of your event management system, and it's the first page you'll see once you log in. It's designed to provide you with a quick and clear overview of the current status of your event, giving you easy access to all the essential features of the system.

As soon as you log in, you'll be presented with a minimalistic and user-friendly interface that provides you with all the necessary information you need to manage your event. The dashboard will display all the most important data, including the number of attendees registered for the event, the number of activities, the total number of spots available, and more.

The dashboard is the central hub for managing all aspects of your event, and it's the ideal starting point for performing a wide range of tasks, from creating new activities to managing attendee registrations. By leveraging the power of the dashboard, you can easily keep track of your event's progress and ensure that everything is running smoothly.

### Site name

<figure><img src="../.gitbook/assets/image (3) (1).png" alt=""><figcaption><p>OpenForum - Dashbord - Site name card</p></figcaption></figure>

The `Site name` card is one of the cards that you will find in the dashboard of your installation. This card displays the name of your site that was defined during the installation process. It is important to note that the site name is not only used as part of the window title in the administrative panel but it is also announced in every API call made from your installation. Therefore, it is recommended to choose a descriptive and unique name for your site to help identify it and distinguish it from other installations.

If you need to change the site name, you can easily do so by navigating to the `Settings editor` page, accessible from the navbar menu. From there, you will find the `General settings` section where you can modify the site name as needed. Remember to click the `Save` button once you're done to apply the changes. It is worth noting that changing the site name will not affect any existing API tokens or keys, so you don't need to regenerate them. However, it is a good practice to notify any third-party services or applications that rely on your API about the change to avoid any disruptions.

### Event dates

<figure><img src="../.gitbook/assets/image (2) (1).png" alt=""><figcaption><p>OpenForum - Dashbord - Event dates card</p></figcaption></figure>

The `event dates` card on the dashboard displays the defined date range for the event. The event date range is set by the administrator, and once set, stub events are automatically created. These stub events allow users to reserve spots in the activities that will be held during the event.

It is important to note that the reservation system is only available for the days included in the defined event date range. Users will not be able to reserve spots for activities outside this range.

### Registration date-time range

<figure><img src="../.gitbook/assets/image.png" alt=""><figcaption><p>OpenForum - Dashbord - Registration date-time range card</p></figcaption></figure>

The `registration date-time range` card on the dashboard displays the registration period for the current event. This period determines the time frame during which users can reserve spots for the event. By default, the registration range should end before the start of the event, but administrators have the flexibility to extend this range beyond the start of the event if desired.

It is important to note that once the registration period has expired, users will no longer be able to reserve spots for the event. Therefore, it is recommended to set the registration range to an appropriate length of time to ensure that users have ample time to make their reservations.

Administrators can easily adjust the registration range by clicking on the "Edit" button in the registration date-time range card. This will allow them to modify the start and end date-time of the registration range, enabling them to set a new range or extend the existing one.

It is worth mentioning that the start and end date-time of the registration range can also be set to the same value, which would effectively create a registration period of zero duration, meaning that users would only be able to reserve spots at the precise start time of the event. However, this is generally not recommended as it could limit the availability of spots for users who are unable to reserve at that precise moment.

### Total imported users

<figure><img src="../.gitbook/assets/image (5) (1).png" alt=""><figcaption><p>OpenForum - Dashbord - Total imported users card</p></figcaption></figure>

The `imported users` card on the dashboard displays the total number of users that have been successfully imported into the application. This feature is useful for administrators who need to keep track of the number of users in the system.

Knowing the total number of imported users is especially important when importing a large number of users, as this can impact system performance. The `imported users` card can be used to monitor the progress of user import, which can take some time depending on the number of users being imported.

The card is also useful in conjunction with the latest import errors card, which displays any errors that occurred during the import process. The combination of these two cards provides administrators with an overview of the user import process, helping to identify any issues and track progress.

### Latest import errors

<figure><img src="../.gitbook/assets/image (1).png" alt=""><figcaption><p>OpenForum - Dashbord - Latest import errors card</p></figcaption></figure>

This card displays the number of errors that occurred during the latest import process of users into the application. If there are errors, the card will show a non-zero number and allow administrators to download the log of the latest import attempt for further analysis.

These errors can occur due to a variety of reasons such as invalid data format, missing required fields, or incorrect user information. It is important to check the import errors regularly to ensure that all the necessary data has been imported correctly and to make any necessary corrections to the data or the import process.

By using this card and keeping an eye on the import errors, administrators can ensure the smooth functioning of the application and avoid any potential issues caused by incorrect or missing user data.
