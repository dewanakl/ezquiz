<?php if (($gagal = flash('gagal')) || ($berhasil = flash('berhasil'))) : ?>
    <div class="alert alert-<?= (@$gagal ? 'danger' : '') . (@$berhasil ? 'success' : '') ?>" role="alert">
        <strong><?= ($gagal ?? $berhasil) ?></strong>
    </div>
<?php endif ?>