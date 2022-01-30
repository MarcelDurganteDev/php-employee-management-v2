<?php
    require __DIR__."/../layout/includes/page_top.php";
?>

<div id="main">
    <h1 class="center">Seccion de consulta</h1>
</div>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Last name</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['model']->get() as $item): ?>
                <tr>
                    <td><?= $item->id ?></td>
                    <td><?= $item->name ?></td>
                    <td><?= $item->lastName ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <?php
    require __DIR__."/../layout/includes/page_bottom.php";
