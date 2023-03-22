<?php parents('layouts/app') ?>

<?php section('main') ?>

<?php foreach ($data as $val) : ?>
    <p><?= $val->uid . ' ' . $val->name ?></p>
<?php endforeach ?>

<?php endsection('main') ?>