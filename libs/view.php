<?php

class View{

    function __construct(){
    }
    function render($nombre, $data = [])
    {
        require "views/".$nombre.".php";
    }
}