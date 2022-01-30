<?php


class Consulta extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function render()
    {
        $this->restrictContent();

        $this ->view->render("consulta/index", [
            'model' => $this->model,
        ]);
    }
}
