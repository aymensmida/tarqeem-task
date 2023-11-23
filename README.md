# Tarqeem Task

Tarqeem Task is a web application that provides user management functionalities. It includes features such as user signup, signin, viewing and searching users using Livewire, and the ability to delete users with soft delete. The application also implements multi-guard authentication and introduces an admin space for administrative purposes.

## Table of Contents

- [Installation](#installation)
- [Technology Used](#technology-used)

## Installation

### Clone the Repository

```
git clone https://github.com/aymensmida/tarqeem-task.git
```

### Download

You can download the project ZIP file from [Gofile](https://gofile.io/d/KevZQW).


```
cd tarqeem-task
```
1- Install Dependencies:
```
composer install
```
2- Set Up Environment Variables:Duplicate the .env.example file to .env and configure your environment variables, including database settings.

```
cp .env.example .env
```
3- Generate Application Key:
```
php artisan key:generate
```
4- Run Migrations and Seeders:
```
php artisan migrate --seed
```
5- Start the Development Server:
```
php artisan serve
```

Then go to `http://localhost:8000/` | `http://localhost:8000/admin`  from your browser and see the app.

- Admin Space Emai: admin@example.coml & password: admin123456:
```
admin@example.com
```
```
admin123456
```

## Technologies Used

- **Laravel 8:** [Official Documentation](https://laravel.com/docs/8.x)
- **Bootstrap 5:** [Official Documentation](https://getbootstrap.com/docs/5.3/getting-started/introduction/)
- **Livewire 2.12:** [Official Documentation](https://laravel-livewire.com/docs/2.x)
