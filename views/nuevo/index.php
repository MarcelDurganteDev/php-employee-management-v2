<?php
$page_title= "Nuevo emloyee";
    require __DIR__."/../layout/includes/page_top.php";
?>

<div id="main">
    <h1 class="center">Seccion de Nuevo</h1>
    <div class="center"><?php if(isset($this ->mensaje)){
        echo $this -> mensaje;
    }
        ?></div>
    <form action="<?= Url::asset('/nuevo/registrarAlumno');?>" method="post">
    <p>
        <label for="matricula">Matricula</label><br>
        <input type="text" name="matricula" id="" required>
    </p>
    <p>
        <label for="nombre">nombre</label><br>
        <input type="text" name="nombre" id="" required>
    </p>
    <p>
        <label for="apellido">apellido</label><br>
        <input type="text" name="apellido" id="" required>
    </p>

    <p>
        <input type="submit" value="Registrar nuevo alumno">
    </p>

    </form>
</div>
<?php
    require __DIR__."/../layout/includes/page_bottom.php";
