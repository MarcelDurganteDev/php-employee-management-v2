<?php


class Ayuda extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    function render()
    {
        // $this ->restrictContent("testesetsetsetsetset");   //  if wanted to do all pages restritec, add to each controller render 
        $this ->view->render("ayuda/index");
    }

    public function test(){
        echo "teste";
    }
}
