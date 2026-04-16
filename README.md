# Warung Biru

Web application built with Laravel framework.

## Setup

1. Clone the repository:
   ```bash
   git clone https://github.com/annisasafi/warungbiruproject.git
   cd warungbiruproject
   ```

2. Install dependencies:
   ```bash
   composer install
   npm install
   ```

3. Configure environment:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. Run migrations:
   ```bash
   php artisan migrate
   ```

5. Start the development server:
   ```bash
   php artisan serve
   ```

## Requirements

- PHP 8.1+
- Laravel 10.0+
- MySQL/MariaDB
- Node.js & npm

## License

MIT
