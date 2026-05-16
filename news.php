<?php
$PAGE = 'news';
$PAGE_TITLE = 'Новости';
include __DIR__ . '/includes/header.php';
?>
<div class="topbar">
    <div class="user-card">
        <div class="user-avatar"><?= icon('user') ?></div>
        <div>
            <div class="user-name"><?= htmlspecialchars($USER['name']) ?></div>
            <div class="user-id">ID: <?= $USER['id'] ?></div>
        </div>
    </div>
    <a href="logout.php" class="btn-logout">ВЫЙТИ</a>
</div>

<div class="page-card">
    <h1>Новости проекта</h1>
    <p class="lead">Все важные события, обновления и анонсы LAMBADA BONUS.</p>

    <?php foreach ($NEWS as $n): ?>
        <div class="news-card" style="margin-bottom:14px">
            <span class="news-tag <?= $n['tag_color'] ?>"><?= htmlspecialchars($n['tag']) ?></span>
            <div class="news-meta"><?= $n['date'] ?><b><?= $n['time'] ?></b></div>
            <div class="news-title"><?= htmlspecialchars($n['title']) ?></div>
            <div class="news-text"><?= htmlspecialchars($n['text']) ?></div>
        </div>
    <?php endforeach; ?>
</div>

<?php include __DIR__ . '/includes/footer.php'; ?>
