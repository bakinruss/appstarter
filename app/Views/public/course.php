<?php /** @var object $item */ ?>
<?= $this->extend('layouts/public') ?>

<?= $this->section('content') ?>
    <div class="container">
        <h1><?= esc($item->title) ?></h1>
        <p><?= nl2br(esc($item->description)) ?></p>
        <p><strong>Статус:</strong> <?= esc($item->status) ?></p>
        <p><a href="<?= site_url('courses') ?>">&larr; Назад к списку курсов</a></p>
    </div>
<?= $this->endSection() ?>

