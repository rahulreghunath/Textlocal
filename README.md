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

### Using it in your projects
<a href="https://www.buymeacoffee.com/rahulreghunath" target="_blank"><img src="https://www.buymeacoffee.com/assets/img/custom_images/orange_img.png" alt="Buy Me A Coffee" style="height: 41px !important;width: 200px !important;box-shadow: 0px 3px 2px 0px rgba(190, 190, 190, 0.5) !important;-webkit-box-shadow: 0px 3px 2px 0px rgba(190, 190, 190, 0.5) !important;" ></a>
