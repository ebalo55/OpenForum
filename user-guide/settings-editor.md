# Settings editor

<details>

<summary>In this page</summary>

[General settings](settings-editor.md#general-settings)

[General settings - critical](settings-editor.md#critical-settings)

[Password generation settings](settings-editor.md#password-generation-settings)

</details>

<figure><img src="../.gitbook/assets/image (3) (2).png" alt=""><figcaption><p>OpenForum - Settings editor</p></figcaption></figure>

The Settings Editor is a critical section of the backend which allows you to define and modify the global behaviour of the application, the event dates and locations, and the password generation policies. The Settings Editor allows you to configure how users will interact with the platform and what functionalities they will have access to.

In this chapter, we will focus on the various settings available within the Settings Editor, and how to modify them to match your specific requirements. The settings can be divided into three main sections: General Settings, Critical General Settings, and Password Generation Settings.

The General Settings define the global behaviour of the backend and include defining the date-time range for reservations and specifying the website name. This is the first set to be configured when defining an event. In contrast, the Critical General Settings are of utmost importance and are responsible for defining the date-time range of the event and the location of the events. It is critical to set up these settings with care to avoid any unwanted side effects.

Lastly, we have the Password Generation Settings, which allow for dynamic password generation policies that can be modified each year. This policy helps improve the security of the platform by dynamically generating unique passwords for users while also making it easier for users to recover their passwords by providing personal information. In the next sections, we will delve deeper into these settings and how to use them effectively.

### General settings

General settings are the first thing to set up when defining an event, as they define the global behaviour of the backend.

The general settings allow you to define:

* The start and end dates for the event subscription period. This period is usually limited to a well-defined date-time range, and subscriptions made before or after this time range will not be handled and will result in an error when requesting via API.
* The website name. This setting is not strictly required, but if used, it allows you to define and edit the front-end main title from the backend without the need to redeploy or change anything on the front end.

It's important to note that the general settings are critical, as they define the global behaviour of the backend and may result in unwanted side effects if not carefully set up.

In particular, the critical general settings allow you to define:

* When the event starts and ends. This value is used to define the number of available days for the creation of events.
* The locations where the events will take place.

It's essential to take note of the side effects when modifying the critical properties. Whenever one of the values in the critical general settings is modified, all the days and related events get dropped and substituted with new, freshly created day-location pairs. Moreover, there is no way to recover the deleted events' titles, descriptions, and related data if they are removed via the modification of the critical properties. Therefore, it's important to be careful and double-check before modifying these settings.

### Password generation settings

Password generation settings allow you to define dynamically a secure password assigned to a user. The password can be generated automatically based on the user's data, such as first name, last name, birth date and other personal information.

To configure the password generation settings, follow the steps below:

1. Choose one or more rules to apply
2. Click the rules from the `available rules` section to add them to the `applied list`
3. Click an already applied rule to remove it
4. The `Generated password` field will show you a sample preview of what the password will look like
5. Click "Save" to save the changes.

Dynamically generating passwords gives some security benefits, such as the ability to change passwords from year to year and the ease of password recovery by knowing personal user information and setup data.
