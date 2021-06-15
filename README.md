# Laravel robots.txt manager


[![Current Release](https://img.shields.io/github/release/djstarcom/laravel-robots-manager.svg)](https://github.com/DJStarCOM/laravel-robots-manager/releases)
[![Build Status](https://travis-ci.org/DJStarCOM/laravel-robots-manager.svg?branch=master)](https://travis-ci.org/DJStarCOM/laravel-robots-manager)
[![Code Coverage](https://scrutinizer-ci.com/g/DJStarCOM/laravel-robots-manager/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/DJStarCOM/laravel-robots-manager/?branch=master)
[![Code Climate](https://codeclimate.com/github/DJStarCOM/laravel-robots-manager/badges/gpa.svg)](https://codeclimate.com/github/DJStarCOM/laravel-robots-manager)
[![Test Coverage](https://codeclimate.com/github/DJStarCOM/laravel-robots-manager/badges/coverage.svg)](https://codeclimate.com/github/DJStarCOM/laravel-robots-manager)

# Installation

First, install the package via composer:

```
composer require "djstarcom/laravel-robots-manager"
```
The package will automatically register itself.

# Usage

Delete projects default public/robots.txt  

Add the following to your routes file:

```php
Route::get('robots.txt', function ()
{
    if (App::environment() == 'production') {
        // If on the live server, serve a nice, welcoming robots.txt.
        RobotsManager::addUserAgent('*');
        RobotsManager::addSitemap('sitemap.xml');
    } else {
        // If you're on any other server, tell everyone to go away.
        RobotsManager::addDisallow('*');
    }

    return Response::make(RobotsManager::generate(), 200, ['Content-Type' => 'text/plain']);
});
```

Refer to the [RobotsManager.php](src/RobotsManager.php) for API usage.

# License

[MIT](LICENSE)
