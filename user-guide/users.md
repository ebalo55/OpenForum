# Users

<details>

<summary>In this page</summary>

Imported users

</details>

<figure><img src="../.gitbook/assets/image (2) (2).png" alt=""><figcaption><p>OpenForum - Users</p></figcaption></figure>

The Users page is where you can manage the list of people that are allowed to access your events. This page has two tabs: "Imported Users" and "Import". The "Import" tab is used to import users using CSV or Excel files.

To define a whitelist, all you need is a spreadsheet that meets some basic requirements. The required fields are Full Name and Birth Date. Full Name contains the user's full name and is used as a password derivation value. Birth Date contains the user's date of birth, which must follow the pre-defined date format. Invalid values will result in the whole row not being imported.

On the "Imported Users" tab, you can view and manage the list of users that have been imported. The table has search, filter, and sort capabilities, and you can export the list of users in Excel format. Clicking on a user will open the "User Details" page, where you can view the user's information and reservations.

### Imported users

The "imported users" tab is the place where all the imported users can be found. The tab contains a data table with search, filter and sort capabilities. You can search and filter the table to quickly find the user(s) you need. Additionally, the table can be exported in `.xlsx` format.

The imported users tab shows a data table with searching, filtering, and sorting capabilities. You can search for a specific user by entering their name in the search box. The table can be sorted by clicking on the column headers. The table can also be filtered by using the dropdown menus on each column.

You can export the displayed users in an Excel file by clicking on the "Export" button at the top right corner of the table. By clicking on a user in the table, you will be redirected to the `User details` page, where you can view the user's information and reservations.

### Import

<figure><img src="../.gitbook/assets/image (4).png" alt=""><figcaption><p>OpenForum- Users - Import tab</p></figcaption></figure>

The "Import" tab of the users page allows you to import users using CSV or Excel files. In order to limit access to events to only allowed people, you need to define a whitelist of authorized users. Here is how you can define the whitelist:

1. Prepare the spreadsheet: The definition of a whitelist is an easy process as the only thing needed is a spreadsheet, namely a CSV or Excel document.
2.  Minimum Required Columns: In order for the import to work, the spreadsheet must contain at least two columns:

    a. Full name: Contains the definition of the user's full name. It's important that the whole name is included in this field as it will be used as a password derivation value.

    b. Birth date: Contains the definition of the user's birthdate. This field must follow the pre-defined date format. A value that does not follow the predefined format will result in the whole row not being imported.

    The required date format is day/month/year. The following are valid and invalid sample values:

    1. 05/05/2000: Valid&#x20;
    2. 31/12/1954: Valid&#x20;
    3. 29/02/2004: Valid&#x20;
    4. 78/01/1935: Invalid&#x20;
    5. 02/33/2045: Invalid&#x20;
    6. 00/00/10001: Invalid
3. It is not important the order the columns appear in the document nor if they are written in any specific case, they must only exist and be named as stated before.
4. Import Users: Once the spreadsheet is prepared, go to the "Import" tab of the users page and click on the "Choose file" button. Select the file containing the users' information and click on "Import." The system will automatically add the users to the "Imported users" tab.

Note that the importing process is asynchronous, you may need to refresh the imported users page many times to see all imported users.
