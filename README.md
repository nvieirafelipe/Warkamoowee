# Warkamoowee
![image](http://blog.wordnik.com/wp-content/uploads/warkamoowee-300x246.jpg)

Playground app with [PHP Slim](http://www.slimframework.com), [Idiorm & Paris](http://j4mie.github.io/idiormandparis)

## Setup

First run `script/bootstrap` to check for dependencies.

Now you can run `script/features` to check our feature tests and `script/tests` for unit tests.

## Environment

We are using [phpdotenv](https://github.com/vlucas/phpdotenv) to load env vars from .env file, rename your public/.env.example and set your local vars.

	DB_HOST=Data base host
	DB_NAME=database name
	DB_USERNAME=username
	DB_PASSWD=password

## Database
You'll need and MySQL database named: warkamoowee

| Tables        |
| ------------- |
| sailors       |

### sailors:

| field   | type   |
|---------|--------|
| id      | int    |
| name    | varchar|