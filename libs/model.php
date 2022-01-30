<?php

class Model{

    //Cada modelo va a tener una conexion a la base de datos
    function __construct(){
        $this->db = new Database();
    }
}