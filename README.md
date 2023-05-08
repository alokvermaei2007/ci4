# User Management App

This is a simple CodeIgniter 4 app that allows you to manage users in a database. (Please refer to automation script from single command installation)

## Requirements

- PHP 7.3 or later 
- MySQL 5.6 or later

## Installation

1. Clone the repository or download the ZIP archive.
2. Create a new MySQL database for the app.
3. Copy the `.env.example` file to `.env` and adjust the database settings.
4. Run `composer install` to install the dependencies.
5. Run `php spark migrate` to create the users table.
6. Run `php spark serve` to start the development server.

## Controllers

The `UserCrud` class is located in the `app/Controllers` directory and provides the following methods:

- `index`: retrieves all users from the database.
- `create`: displays a form to create a new user.
- `store`: creates a new user in the database using the given data.
- `update`: updates a user by ID in the database using the given data.
- `delete`: deletes a user by ID from the database.

## Routes

The app has the following routes defined in the `app/Config/Routes.php` file:

- `GET /`: redirects to `/users-list`.
- `GET /users-list`: displays a list of all users.
- `GET /user-form`: displays a form to create a new user.


Sample Screentshot for List page
<img width="1357" alt="image" src="https://user-images.githubusercontent.com/49829684/236779191-d7bc2998-698b-460d-ba5f-39888d921546.png">
