<?php
require_once __DIR__."/../controllers/errores.php";
class App
{
    function __construct()
    {
        $url= isset($_GET["url"]) ? $_GET["url"] : NULL;
        $url = rtrim($url, "/");
        $url= explode("/", $url);

        //cuando se ingresa sin definir controlador
        $url[0] = $url[0] ?: 'main';
        $archivoController ="controllers/".$url[0].".php";

        if(file_exists($archivoController))
        {
            require_once $archivoController;
            $controller = new $url[0];
            $controller -> loadModel($url[0]);

            if(isset($url[1])) {
                $controller->{$url[1]}();
            }else{
                $controller ->render();
            }
        }else{
            $controller= new Errores();
        }
    }
}
