# Textlocal
A simple PHP API extension for Textlocal(textlocal.in) sms gateway integration in Laravel

Require this package in your composer.json and update composer. This will download the package.

    composer require rahulreghunath/textlocal

## Installation

### Laravel

After updating composer, add the ServiceProvider to the providers array in config/app.php

    Rahulreghunath\Textlocal\ServiceProvider::class,
    
packege auto discovery available for laravel version 5.5 or later
    
After adding ServiceProvider, Run the command 
        
        php artisan vendor:publish
        
After that set your textlocal authentication key inside textlocal.php file inside config folder and you are good to go

    $sms = new Textlocal();
    $sms->send('message', 'mobile number','sender'); //sender is optional
 
 ### Documentation
 You can check https://api.textlocal.in/docs/phpclass for more available methods and complete Documentation can be found [here](https://rahulreghunath.github.io/Textlocal/)
