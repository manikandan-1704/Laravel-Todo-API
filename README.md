# Todo LIST API

Todo List API is a Laravel project in which you can Register and login and you are allowed to create, read, update and delete todos for the authorized user.

## Features

- User registration and login with Sanctum for authentication
- CRUD operations for managing todo items
- Postman collection for testing the API
- Database setup and migration

## Installation

1. Clone the repository to your local machine:

git clone https://github.com/manikandan-1704/Laravel-Todo-API.git


2. Install the Laravel dependencies using Composer:
Composer Install

composer require laravel/sanctum


3. Configure the database settings:

Create a new database for the project and update the `.env` file with the database credentials.

4. Run the database migrations:

php artisan migrate

5. To run the Application use :

php artisan serve



### API Endpoints

- `POST /api/register`: Register a new user.
- `POST /api/login`: Login a user.
- `GET /api/todos`: Get all todo items.
- `POST /api/todos/create`: Create a new todo item.
- `GET /api/todos/{id}`: Get a todo item by ID.
- `PUT /api/todos/{id}/update`: Update a todo item by ID.
- `DELETE /api/todos/{id}/delete`: Delete a todo item by ID.


## Contributing

Contributions to the Todo REST API project are welcome! If you encounter any issues or have suggestions for improvement, please open an issue or submit a pull request.



