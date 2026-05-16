<?php
$PAGE = 'index';
$PAGE_TITLE = 'Главная';
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

<section class="hero">
    <div class="hero-tag"><?= htmlspecialchars($SITE['project']) ?></div>
    <h1 class="hero-title">LAMBADA<br>BONUS</h1>

    <div class="hero-features">
        <div class="feature">
            <div class="feature-icon"><?= icon('refresh') ?></div>
            <span>Стабильные<br>обновления</span>
        </div>
        <div class="feature">
            <div class="feature-icon"><?= icon('people') ?></div>
            <span>Отзывчивое<br>комьюнити</span>
        </div>
        <div class="feature">
            <div class="feature-icon"><?= icon('shield') ?></div>
            <span>Активная<br>администрация</span>
        </div>
    </div>

    <p class="hero-desc">
        <b>LAMBADA BONUS</b> — это новый уровень RolePlay в CRMP.
        Присоединяйся к нам и начни свою историю уже сегодня!
    </p>
</section>

<aside class="news">
    <div class="news-head">
        <h3>НОВОСТИ ПРОЕКТА</h3>
        <a href="news.php">ВСЕ НОВОСТИ</a>
    </div>
    <?php foreach ($NEWS as $n): ?>
        <div class="news-card">
            <span class="news-tag <?= $n['tag_color'] ?>"><?= htmlspecialchars($n['tag']) ?></span>
            <div class="news-meta"><?= $n['date'] ?><b><?= $n['time'] ?></b></div>
            <div class="news-title"><?= htmlspecialchars($n['title']) ?></div>
            <div class="news-text"><?= htmlspecialchars($n['text']) ?></div>
        </div>
    <?php endforeach; ?>
</aside>

<section class="servers-box">
    <h3>ВЫБЕРИТЕ СЕРВЕР</h3>
    <?php foreach ($SERVERS as $i => $s): ?>
        <div class="server-row <?= $i === 0 ? 'featured' : '' ?>">
            <div class="server-num"><?= $s['num'] ?></div>
            <div>
                <div class="server-name"><?= htmlspecialchars($s['name']) ?></div>
                <div class="server-online">Онлайн: <?= $s['online'] ?> / <?= $s['slots'] ?></div>
            </div>
            <div class="server-ping <?= $s['ping_color'] ?>">
                <?= icon('signal') ?> <?= $s['ping'] ?> ms
            </div>
        </div>
    <?php endforeach; ?>
    <a href="servers.php" class="btn-all-servers">ВСЕ СЕРВЕРЫ <?= icon('arrow') ?></a>
</section>

<a href="#" class="cta">
    ИГРАТЬ НА 01 СЕРВЕРЕ
    <span class="cta-arrow"><?= icon('arrow') ?></span>
</a>

<?php include __DIR__ . '/includes/footer.php'; ?>
