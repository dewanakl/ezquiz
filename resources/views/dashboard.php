<?php parents('layouts/app') ?>

<?php section('main') ?>

<div class="d-flex justify-content-between align-items-center">
    <h1>Dashboard</h1>

    <form action="<?= route('logout') ?>" method="post">
        <?= csrf() ?>
        <?= method('delete') ?>
        <button class="btn btn-danger" type="submit">Logout</button>
    </form>
</div>


<p>Halooo <?= auth()->user()->nama ?></p>
<p><?= auth()->user()->role_id ?></p>


<?php endsection('main') ?>