# Laravel Book Management

This is a simple Laravel application to manage a collection of books with CRUD functionalities.

## Features

- List all books
- Add a new book
- Edit an existing book
- Delete a book

## Requirements

- PHP >= 7.3
- Composer
- Node.js & npm
- MySQL

## Installation

1. **Clone the repository:**
   ```bash
   git clone https://github.com/USERNAME/REPOSITORY.git
   cd REPOSITORY
   ```

2. **Install dependencies:**

    ```bash
    composer install
    npm install
    ```

Copy the .env file and set up your environment variables:

    ```bash
    cp .env.example .env
    ```

Generate an application key:


    ```bash
    php artisan key:generate
    ```

Set up your database configuration in the .env file:

    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_user
    DB_PASSWORD=your_database_password
    ```

Run migrations to create the database tables:

    ```bash
    php artisan migrate
    ```

Run the development server:

    ```bash
    php artisan serve
    ```

Your application will be running at http://localhost:8000.

Usage
List All Books
Visit http://localhost:8000/books to see a list of all books.

Add a New Book
Visit http://localhost:8000/books/create to add a new book.

Edit a Book
Visit http://localhost:8000/books/{id}/edit to edit a book.

Delete a Book
From the books list, click the "Delete" button next to a book to remove it from the collection.

Contributing
Fork the repository
Create a new branch (git checkout -b feature/YourFeature)
Commit your changes (git commit -am 'Add some feature')
Push to the branch (git push origin feature/YourFeature)
Create a new Pull Request