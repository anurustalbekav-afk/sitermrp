<?php
$PAGE = 'servers';
$PAGE_TITLE = 'Серверы';
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
    <h1>Наши серверы</h1>
    <p class="lead">Выбирай сервер с подходящим пингом и присоединяйся к игре.</p>

    <?php foreach ($SERVERS as $i => $s): ?>
        <div class="server-row <?= $i === 0 ? 'featured' : '' ?>" style="background:#fff;margin-bottom:8px">
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
</div>

<?php include __DIR__ . '/includes/footer.php'; ?>
