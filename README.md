
<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

# Optimizely Connector App

## About
Connector used to list feature flags created in <a href="https://optimizely.com">Optimizely</a>.
<p>For more details please check documentation in <a href="https://docs.developers.optimizely.com/full-stack/docs/php">Getting Started page</a>

## Build Instructions
### Update environment variables

<code>cp .env.example .env</code>
<p>Then should edit the value in .env OPTIMIZELY_KEY with the one that's being provided in Optimizely platform.

<code>docker-compose up -d --build</code>


Then the application should be accessible in http://localhost:9000/


### Run docker
<code>docker-compose up -d --build</code>

Then the application should be accessible in http://localhost:9000/

## Documentation
Swagger documentation available in http://localhost:9000/documentation.
<p>To update Swagger, please run <code>php artisan l5-swagger:generate</code> inside the container.

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.
