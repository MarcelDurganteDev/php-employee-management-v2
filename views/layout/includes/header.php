<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><?= config('app_name') ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href=" <?= Url::asset('/main'); ?>">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= Url::asset('/nuevo'); ?>">Nuevo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=" <?= Url::asset('/consulta'); ?>">Consulta</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= Url::asset('/ayuda'); ?>">Ayuda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= Url::asset('/auth'); ?>">Login</a>
            </li>
        </ul>
    </div>
</nav>
