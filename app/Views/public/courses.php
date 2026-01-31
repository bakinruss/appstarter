<?php /** @var array $items */ ?>
<?= $this->extend('layouts/public') ?>

<?= $this->section('content') ?>
    <div class="container">
        <h1>Курсы</h1>
        <?php if (empty($items)): ?>
            <p>Курсов пока нет.</p>
        <?php else: ?>
            <ul class="courses-list">
                <?php foreach ($items as $course): ?>
                    <li class="course-item">
                        <h2><?= esc($course->title) ?></h2>
                        <p><?= esc($course->description) ?></p>
                        <a href="<?= site_url("courses/{$course->id}/view") ?>">Подробнее</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
<?= $this->endSection() ?>

