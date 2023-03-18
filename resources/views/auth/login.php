<?php parents('layouts/app') ?>

<?php section('main') ?>

<h1>Login wkwkw</h1>

<?= including('layouts/alert') ?>

<form action="<?= route('login') ?>" method="post">
    <?= csrf() ?>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="email">
        <?php if (error('email')) : ?>
            <small class="text-danger"><?= error('email') ?></small>
        <?php endif ?>
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="password">
        <?php if (error('password')) : ?>
            <small class="text-danger"><?= error('password') ?></small>
        <?php endif ?>
    </div>

    <button class="btn btn-outline-success" type="submit">Login</button>
</form>

<?php endsection('main') ?>