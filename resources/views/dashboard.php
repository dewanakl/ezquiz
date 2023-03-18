<?php parents('layouts/app') ?>

<?php section('main') ?>

<div class="d-flex justify-content-end align-items-center">
    <form action="<?= route('logout') ?>" method="post">
        <?= csrf() ?>
        <?= method('delete') ?>
        <button class="btn btn-danger" type="submit">Logout</button>
    </form>
</div>

<h1>Dashboard</h1>
<p>Halooo gesss !!!!!!!!!!!!!</p>

<?php endsection('main') ?>