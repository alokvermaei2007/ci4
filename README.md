# User Management App
This is a simple CodeIgniter 4 app that allows you to manage users in a database.

(Please refere to automated script read me file to install via sh)

Requirements

PHP 7.3 or later 
MySQL 5.6 or later


# Installation

Clone the repository or download the ZIP archive.

Create a new MySQL database for the app.

Copy the .env.example file to .env and adjust the database settings.

Run composer install to install the dependencies.

Run php spark migrate to create the users table.

Run php spark serve to start the development server.

# Contollers

The UserCrud class is located in the app/Contollers directory and provides the following methods:

index: retrieves all users from the database.

create: creates a new user in the database using the given data.

store: store a new user in the database using the given data.

update: updates a user by ID in the database using the given data.

delete: deletes a user by ID from the database.

 
The app has the following routes defined in the app/Config/Routes.php file:

GET /: redirects to /users-list.

GET /users-list: displays a list of all users.

GET /user-form: displays a form to create a new user.
