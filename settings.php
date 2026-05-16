<?php
$PAGE = 'settings';
$PAGE_TITLE = 'Настройки';
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
    <h1>Настройки</h1>
    <p class="lead">Управление параметрами вашего аккаунта.</p>

    <form method="post">
        <div class="form-row">
            <label>Никнейм</label>
            <input type="text" name="nick" value="<?= htmlspecialchars($USER['name']) ?>">
        </div>
        <div class="form-row">
            <label>Email</label>
            <input type="email" name="email" placeholder="you@example.com">
        </div>
        <div class="form-row">
            <label>Новый пароль</label>
            <input type="password" name="pwd" placeholder="••••••••">
        </div>
        <div class="form-row">
            <label>Язык интерфейса</label>
            <select name="lang">
                <option>Русский</option>
                <option>English</option>
            </select>
        </div>
        <button type="submit" class="btn-primary">СОХРАНИТЬ</button>
    </form>
</div>

<?php include __DIR__ . '/includes/footer.php'; ?>
