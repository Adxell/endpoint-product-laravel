<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Steps

-   Run database with docker

```
docker compose up
```

-   Run server

```
php artisan serve
```

-   Make migrations

```
php artisan migrate
```

# Endpoints

-   Register(POST)

```
http://127.0.0.1:8000/api/register
```

example

```
{
    "name": "Adxell",
    "email": "adxell@gmail.com",
    "password": "adxell12345"
}
```

-   Login(POST)

```
http://127.0.0.1:8000/api/login
```

example

```
{
    "email":"adxell@gmail.com",
    "password": "adxell12345"
}
```

-   Logout(GET)

Note: set Bearer token

```
http://127.0.0.1:8000/api/logout
```

-   Create product(POST)

Note: set Bearer token

```
http://127.0.0.1:8000/api/create_product
```

example

```
{
    "nameProduct": "coca-cola",
    "description": "this is a description",
    "price": 14
}
```
