# Ento Code assessment

## Install with Composer

```
    $ curl -s http://getcomposer.org/installer | php
    $ php composer.phar install or composer install
```

## Set Environment

```
    $ cp .env.example .env
```

## Set the application key

```
   $ php artisan key:generate
```

## Run migrations and seeds

```
   $ php artisan migrate --seed
```

## Run artisan command to start laravel app

```
   $ php artisan serve
```

## The API will be running on localhost:8000.

## Getting with Curl

```
    $ curl -H 'content-type: application/json' -H 'Accept: application/json' -v -X GET http://127.0.0.1:8000/api/listUsers
    $ curl -H 'content-type: application/json' -H 'Accept: application/json' -v -X POST -d '{"start_time":"2021-10-04 09:00:00","end_time":"2021-10-04 17:00:00"}' http://127.0.0.1:8000/api/getEmployees
```
