<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= esc($title ?? 'Администрирование') ?></title>
    <link rel="stylesheet" href="/assets/app.css">
</head>
<body>
<div class="page admin">
    <?= $this->include('partials/admin/header') ?>
    <main class="container">
        <?= $this->renderSection('content') ?>
    </main>
    <?= $this->include('partials/admin/footer') ?>
</div>
</body>
</html>
