# Task Management
You can start using task management application in localhost 
## Setting up
open command line or terminal in main tree project and run commands:
### install all packages
```bash
composer install
```

### create database
```bash
php artisan migrate
```

### insert data into database
```bash
php artisan db:seed
```
will be insert fake data

## Running the application
### run in localhost
```bash
php artisan serve
```
will be running on link: **http://127.0.0.1:8000**

open link any browser and use application

### Usein application
You can use user account:
- Email: **tester@mail.com**
- Password: **password**

You can see the list of fake tasks.

## Database structuer
| Name Table | Columns | Forgin Key |
|----------- | ------- | ---------- |
| Users | id, name, email, password, email_verified_at, remember_token, created_at, updated_at | - |
| Tasks | id, title, description, completion, user_id, created_at, updated_at | `user_id` >>> `user`.`id` |

