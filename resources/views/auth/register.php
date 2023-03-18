<?php parents('layouts/app') ?>

<?php section('main') ?>

<h1>Register wkwkw</h1>

<form action="<?= route('register') ?>" method="post">
    <?= csrf() ?>

    <div class="mb-3">
        <label for="nama" class="form-label">nama</label>
        <input type="text" name="nama" class="form-control" id="nama">
        <?php if (error('nama')) : ?>
            <small class="text-danger"><?= error('nama') ?></small>
        <?php endif ?>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="email">
        <?php if (error('password')) : ?>
            <small class="text-danger"><?= error('password') ?></small>
        <?php endif ?>
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="password">
        <?php if (error('password')) : ?>
            <small class="text-danger"><?= error('password') ?></small>
        <?php endif ?>
    </div>

    <button class="btn btn-outline-success" type="submit">Register</button>
</form>

<?php endsection('main') ?>