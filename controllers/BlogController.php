<?php

namespace Controllers;

use MVC\Router;

//use Twilio\Rest\Api\V2010\Account\ValidationRequestList;

class BlogController
{
    public static function blogs(Router $router)
    {   // $auth=new Admin();0
        $router->render('paginas/blogs', [
            'Dato'=>false,
            'header'=>false
             
        ]);
    }

}