<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= esc($title ?? 'Онлайн-школа') ?></title>
    <link rel="stylesheet" href="/assets/app.css">
</head>
<body>
<div class="page">
    <?= $this->include('partials/public/header') ?>
    <main class="container">
        <?= $this->renderSection('content') ?>
    </main>
    <?= $this->include('partials/public/footer') ?>
</div>
</body>
</html>
