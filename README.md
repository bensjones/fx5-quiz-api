# Five X 5 Inventory 101 quiz api

This is a super simple api that has a get request which returns 5 quiz questions with answer options, correct answer index, and wrong answer help.

## Dependencies

This uses Lumen and MySQL for a backend. So you'll want to make sure MySQL is installed along with Composer.

## Getting Started

1. Set your database credentials in `.env` file
1. Run `php artisan migrate` to insert the table in your db.
1. Run `php artisan db:seed` to populate the table with 5 questions.
1. Run `php -S localhost:8001 -t public` to start the server locally.
1. Curl (or us Postman) call a GET request to `http://localhost:8001/api/questions/`
