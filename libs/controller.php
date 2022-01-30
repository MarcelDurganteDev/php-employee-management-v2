<?php

class Controller{

    public function __construct()
    {
        $this -> view= new View();
    }

    public function loadModel($model)
    {
        $this->model = static::customLoadModel($model);
    }

    public static function customLoadModel(string $model)
    {
        $file= __DIR__."/../models/".$model."model.php";

        if(file_exists($file))
        {
            require_once $file;
            $modelName=$model."Model";
            return new $modelName();
        }

        return null;
    }
}
