<?php

class Controller{

    public function __construct(){
        $this -> view= new View();
    }
    function loadModel($model){
        $file= "models/".$model."model.php";

        if(file_exists($file)){
            require $file;
            $modelName=$model."Model";
            $this->model = new $modelName();
        }
    }
}
