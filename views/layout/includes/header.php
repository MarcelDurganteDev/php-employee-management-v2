<?php
$auth_user = UserAuth::authUser();
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="<?= Url::url('/') ?>"><?= config('app_name') ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href=" <?= Url::url('/main'); ?>">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= Url::url('/nuevo'); ?>">Nuevo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=" <?= Url::url('/consulta'); ?>">Consulta</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= Url::url('/ayuda'); ?>">Ayuda</a>
            </li>

            <?php if($auth_user ?? null): ?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?= $auth_user['name'] ?? null ?>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="<?= Url::url('/#profile'); ?>">Profile</a>
                    <li><a class="dropdown-item" href="<?= Url::url('/auth/logout'); ?>">Logout</a>
                </ul>
            </li>
            <?php else: ?>
            <li class="nav-item">
                <a class="nav-link" href="<?= Url::url('/auth'); ?>">Login</a>
            </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>

<?php
    require __DIR__."/flash_message.php";