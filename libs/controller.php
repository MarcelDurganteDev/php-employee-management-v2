<?php

class Controller
{
    public $auth_user = [];

    public function __construct()
    {
        Session::start();
        $this -> view= new View();
        $this->auth_user = UserAuth::authUser();
    }

    public function restrictContent(string $message = null)
    {
        if (!$this->auth_user)
        {
            $message = $message ?: 'Unauthenticated. Restrict area.';
            Session::flash($message, 'error');

            header('Location: ' . Url::url('/auth/login'));die();
        }
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
