<aside class="sidebar">
    <a class="logo" href="index.php">
        <span class="logo-mark">LB</span>
        <span class="logo-text">LAMBADA<br><b>BONUS</b></span>
    </a>
    <nav class="nav">
        <?php foreach ($MENU as $item): ?>
            <a href="<?= $item['key'] ?>.php"
               class="nav-item <?= $PAGE === $item['key'] ? 'active' : '' ?>">
                <?= icon($item['icon'], 'nav-icon') ?>
                <span><?= htmlspecialchars($item['label']) ?></span>
            </a>
        <?php endforeach; ?>
    </nav>
</aside>
