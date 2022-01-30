<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="<?= Url::asset('/public/assets/css/default.css');?>">

</head>
<body>
    <div id="header">
    <ul>
        <li><a href=" <?= Url::asset('/main');?>">Inicio</a></li>
        <li><a href="<?= Url::asset('/nuevo');?>">Nuevo</a></li>
        <li><a href=" <?= Url::asset('/consulta');?>">Consulta</a></li>
        <li><a href="<?= Url::asset('/ayuda');?>">Ayuda</a></li>
    </ul>
    </div>
</body>
</html>