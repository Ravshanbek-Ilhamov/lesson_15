<?php
namespace App\Helpers;


class View{

    public static function make($view,$title,$products = []){

        ob_start();
        include dirname(__DIR__) . "/Views/" . $view . ".php";
        $content = ob_get_clean();
        include dirname(__DIR__) . "/Views/main.php";
    }
}

?>