# Event CMS

<details>

<summary>In this page</summary>

[Event: settings](event-cms.md#settings)

[Event: activities](event-cms.md#activities)

[Activity: creation and editing](event-cms.md#activity-creation-editing)

</details>

<figure><img src="../.gitbook/assets/image (2).png" alt=""><figcaption><p>OpenForum - Event CMS</p></figcaption></figure>

Welcome to the "Event CMS" section of the OpenForum user guide. This chapter covers the various features and settings related to managing events and activities through the CMS (Content Management System).

The event CMS main page serves as a central hub for all the events and day-location pairs that have been created. The page displays a powerful data table that enables easy sorting, filtering, and searching of events. In addition, the data table provides various export capabilities that allow users to generate reports and data backups.

Clicking on an event nickname takes users to the event summary page, where they can access two separate tabs: "activities" and "settings". The settings tab allows users to configure basic event settings, such as the nickname and the maximum number of reservations allowed. Note that an event must have a maximum number of reservations set before it can be made reservable.

The activities tab of the event summary page provides a data table of all the activities associated with the selected event. This data table offers various capabilities such as search, filtering, sorting, and exporting, and enables users to create new activities or edit existing ones.

The creation/editing page of activities provides many options for defining the activity details, such as the activity name, starting and ending time, and the maximum number of reservations. Additionally, the activity description is defined using Markdown, which allows for strong customizability and rich formatting.

### Event

#### settings

<figure><img src="../.gitbook/assets/image.png" alt=""><figcaption><p>OpenForum - Event CMS - Event settings</p></figcaption></figure>

The settings tab of the event summary page allows for the modification of the basic settings of an event. These settings define the fundamental characteristics of an event and must be set in order for the event to be reservable.

To access the settings tab, click on the event nickname on the main page, which will take you to the event summary page. From there, click on the "Settings" tab to open the settings editor.

Each event is identified by a unique combination of date and location and can be further distinguished by a nickname. Additionally, each event has a maximum number of reservations that can be associated with it.

The number of reservations is counted as the number of distinct users who have reserved at least one activity for the given date and location pair. In this section, you can change the following properties:

* `Nickname`: This value will be returned in API responses to allow for the unique identification of the date and location pair from the front end.
* `Maximum reservation number`: This value defines the maximum number of unique users who can have one or more reservations for the current date and location pair.

#### Activities

<figure><img src="../.gitbook/assets/image (1).png" alt=""><figcaption><p>OpenForum - Event CMS - Activities</p></figcaption></figure>

The Activities tab displays a table that lists all activities associated with the selected event, along with information such as the activity name, the start and end times, and the maximum number of reservations allowed for each activity.

From this table, you can search and filter the activities based on their names or other properties, sort the activities by any column, and export the list of activities as either a full list or a list of reservations only.

Clicking on an activity in the table will take you to the activity editing page. On this page, you can see detailed information about the activity, including the name, description, start and end times, and the maximum number of reservations allowed.

### Activity creation/editing

<figure><img src="../.gitbook/assets/image (3).png" alt=""><figcaption><p>OpenForum - Event CMS - Activities - Creation / Editing</p></figcaption></figure>

The OpenForum Event CMS allows you to create and edit activities associated with your events. Activities are the individual components that users can reserve within an event. This chapter will guide you through the process of creating and editing activities.

When you create or edit an activity, you will be presented with a form that allows you to define various settings and options for the activity.

General Settings:

* `Name`: The name of the activity, which will be displayed to the user.
* `Date and Time`: The start and end date and time of the activity.
* `Maximum reservations`: The maximum number of reservations that can be made for the activity.

Activity Description:

* `Description`: A detailed description of the activity, which can be written in Markdown format.

Once you have finished setting the options for your activity, you can save it by clicking the "Save" button. If you are editing an existing activity, your changes will be applied immediately.
