<?php
$PAGE = 'support';
$PAGE_TITLE = 'Поддержка';
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
    <h1>Поддержка</h1>
    <p class="lead">Опишите вашу проблему — мы ответим в ближайшее время.</p>

    <form method="post">
        <div class="form-row">
            <label>Тема</label>
            <input type="text" name="subject" placeholder="Например: проблема с входом">
        </div>
        <div class="form-row">
            <label>Сообщение</label>
            <textarea name="message" rows="5" placeholder="Подробно опишите проблему..."></textarea>
        </div>
        <button type="submit" class="btn-primary">ОТПРАВИТЬ ОБРАЩЕНИЕ</button>
    </form>

    <div style="margin-top:24px;display:flex;gap:30px;flex-wrap:wrap">
        <div><b>Discord:</b> <?= htmlspecialchars($SITE['discord']) ?></div>
        <div><b>VK:</b> <?= htmlspecialchars($SITE['vk']) ?></div>
    </div>
</div>

<?php include __DIR__ . '/includes/footer.php'; ?>
