<?php

namespace App;

use App\Routes\Request;
use App\Routes\Route;

class App{

    public static function run(){
     
        $request = new Request();
        $route = new Route($request);
        return $route->action();
    }
}
?>