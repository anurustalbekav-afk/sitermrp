<?php
$PAGE = 'account';
$PAGE_TITLE = 'Аккаунт';
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
    <h1>Аккаунт</h1>
    <p class="lead">Информация о вашем игровом профиле.</p>

    <div class="shop-grid">
        <div class="shop-item">
            <div class="news-tag blue">профиль</div>
            <div class="news-title"><?= htmlspecialchars($USER['name']) ?></div>
            <div class="news-text">ID: <?= $USER['id'] ?></div>
        </div>
        <div class="shop-item">
            <div class="news-tag green">статус</div>
            <div class="news-title">Активный игрок</div>
            <div class="news-text">Аккаунт верифицирован</div>
        </div>
        <div class="shop-item">
            <div class="news-tag red">баланс</div>
            <div class="news-title">0 ₽</div>
            <div class="news-text">Пополнить можно в магазине</div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/includes/footer.php'; ?>
