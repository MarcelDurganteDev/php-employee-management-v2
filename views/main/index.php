<?php
    $auth_user = UserAuth::authUser();
    $page_title= "Index Page";
    require __DIR__."/../layout/includes/page_top.php";
?>
    <div id="main">
        <h1 class="center">Bienvenido al sitio <?= $auth_user['name'] ?? '' ?></h1>

    </div>
<?php
    require __DIR__."/../layout/includes/page_bottom.php";
