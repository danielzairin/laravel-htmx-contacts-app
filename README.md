# htmx Laravel Contacts App

A contacts CRUD app to get me comfortable writing PHP and Laravel.

## Contributing

Requirements:
- PHP v8.3+
- Composer
- NodeJS v20+
- npm

Clone the repo and install dependencies:
```
git clone https://github.com/danielzairin/laravel-htmx-contacts-app.git
cd laravel-htmx-contacts-app/
composer install
npm install
```

Setup the env file and database:
```
cp .env.example .env
php artisan key:generate
php artisan migrate
```

Run the dev servers:
```
npm run dev
php artisan serve
```