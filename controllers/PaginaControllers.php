<?php

namespace Controllers;

use MVC\Router;

//use Twilio\Rest\Api\V2010\Account\ValidationRequestList;

class PaginaControllers
{
    public static function index(Router $router)
    {   // $auth=new Admin();0
        $router->render('paginas/index', [
            'Dato'=>false
             
        ]);
    }
}   