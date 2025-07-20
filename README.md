
# Laravel Blog Project

This is a simple blog application built with Laravel. It demonstrates basic CRUD operations for articles, user authentication, and pagination.

## Features
- Article listing with pagination
- Article detail view
- User authentication (register, login, logout)
- MVC architecture

## Requirements
- PHP >= 8.0
- Composer
- SQLite (or other supported database)
- Node.js & npm (for frontend assets)

## Installation

1. **Clone the repository:**
   ```sh
   git clone <your-repo-url>
   cd blog
   ```

2. **Install PHP dependencies:**
   ```sh
   composer install
   ```

3. **Install Node dependencies:**
   ```sh
   npm install
   ```

4. **Copy the example environment file and set your configuration:**
   ```sh
   cp .env.example .env
   ```
   Edit `.env` to set your database and other environment variables.

5. **Generate application key:**
   ```sh
   php artisan key:generate
   ```

6. **Run migrations:**
   ```sh
   php artisan migrate
   ```

7. **(Optional) Seed the database:**
   ```sh
   php artisan db:seed
   ```

8. **Build frontend assets:**
   ```sh
   npm run build
   ```

9. **Start the development server:**
   ```sh
   php artisan serve
   ```
   The application will be available at `http://localhost:8000`.

## Project Structure
- `app/Models/Article.php` - Article model
- `app/Http/Controllers/ArticleController.php` - Controller for articles
- `resources/views/articles/` - Blade templates for articles
- `routes/web.php` - Web routes
- `database/migrations/` - Database migrations

## Usage
- Visit the home page to see the list of articles.
- Click on an article to view its details.
- Register or log in to create, edit, or delete articles (if implemented).

## License
This project is open-source and available under the [MIT license](LICENSE).
