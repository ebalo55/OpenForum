# Dynamic, predictable, password generation for whitelisted users

OpenForum allows administrators to define a set of rules that can be used to dynamically generate passwords for whitelisted users. The password generation process uses two fields for each user: their full name and date of birth. The generated passwords are predictable and will never need to be communicated to the user, as they can be computed manually if the user knows the rule set used to generate it originally. The available rules can be extended to make the passwords more difficult to guess.

Notes:

* Modifying the rule set after importing users will not change their passwords.
* Single rules can be repeated any number of times in the rule set.
* No custom rules can be defined.
* Files used for user import are deleted immediately after the import is completed.
* As the creation of dynamic passwords and their hashing may result in a resource-intensive process, the import of users is an asynchronous process.
* Only an import at a time is allowed.
