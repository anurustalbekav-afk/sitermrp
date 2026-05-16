<?php
$PAGE = 'shop';
$PAGE_TITLE = 'Магазин';
include __DIR__ . '/includes/header.php';

$ITEMS = [
    ['name' => 'VIP-статус Bronze',  'desc' => 'Доступ к бонусам и привилегиям',           'price' => 199],
    ['name' => 'VIP-статус Silver',  'desc' => 'Расширенный набор игровых преимуществ',    'price' => 399],
    ['name' => 'VIP-статус Gold',    'desc' => 'Максимум возможностей в игре',             'price' => 699],
    ['name' => 'Donate валюта 1000', 'desc' => 'Игровая валюта для покупок на сервере',    'price' => 149],
    ['name' => 'Donate валюта 5000', 'desc' => 'Выгодный пакет валюты',                    'price' => 599],
    ['name' => 'Премиум авто',       'desc' => 'Эксклюзивный автомобиль для VIP-игроков',  'price' => 999],
];
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
    <h1>Магазин</h1>
    <p class="lead">Покупайте VIP-статусы, валюту и эксклюзивные предметы.</p>

    <div class="shop-grid">
        <?php foreach ($ITEMS as $it): ?>
            <div class="shop-item">
                <div class="news-title"><?= htmlspecialchars($it['name']) ?></div>
                <div class="news-text"><?= htmlspecialchars($it['desc']) ?></div>
                <div class="price"><?= $it['price'] ?> ₽</div>
                <button>КУПИТЬ</button>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include __DIR__ . '/includes/footer.php'; ?>
