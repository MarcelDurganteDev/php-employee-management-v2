<?php

if(!isset($_SESSION))
{
    session_start();
}

require_once __DIR__."/config/config.php";
require_once __DIR__."/functions/global_functions.php";
require_once __DIR__."/libs/Session.php";
require_once __DIR__."/libs/database.php";
require_once __DIR__."/libs/Url.php";
require_once __DIR__."/libs/Helpers.php";
require_once __DIR__."/libs/controller.php";
require_once __DIR__."/libs/view.php";
require_once __DIR__."/libs/model.php";
require_once __DIR__."/libs/app.php";
require_once __DIR__."/libs/UserAuth.php";