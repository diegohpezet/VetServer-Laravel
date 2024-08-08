# VetServer

This project is a RESTful API built with the Laravel framework. It allows you to perform CRUD operations (Create, Read, Update, Delete) on owners, pets, appointments and treatments. This API follows standard REST conventions and communicates using JSON.

## Prerequisites

- PHP 8.x or higher
- Composer 2.x or higher
- Laravel 11.x or higher
- MySQL (or any other supported database management system)
- Postman (optional, for testing API routes)

Installation

1. Clone the repository

```bash
git clone https://github.com/yourusername/your-repo.git
cd your-repo
```

2. Install dependencies

```bash
composer install
```

3. Set up environment

  - Copy the .env.example file and rename it to .env:

```bash
cp .env.example .env
```

  - . Configure the environment variables in .env to match your development environment. Specifically, adjust the database settings:

```plaintext
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

4. Generate the application key

```bash
php artisan key:generate
```

5. Migrate the database

```bash
php artisan migrate
```
6. (Optional) Seed the database with sample data

```bash
php artisan db:seed
```

7. Start the development server

```bash
php artisan serve
```

The API will be available at http://localhost:8000.

## Contribution

If you would like to contribute to this project, please follow these steps:

    Fork the repository.
    Create a new branch (git checkout -b feature/new-feature).
    Make your changes.
    Commit your changes (git commit -m 'Add new feature').
    Push your branch (git push origin feature/new-feature).
    Open a Pull Request.

## License

This project is licensed under the MIT License - see the LICENSE file for details.