    </main>
</div>

<footer class="footer">
    <div class="footer-col">
        <div class="footer-icon vk"><b>VK</b></div>
        <div>
            <div class="footer-title">МЫ ВКОНТАКТЕ</div>
            <div class="footer-sub"><?= htmlspecialchars($SITE['vk']) ?></div>
        </div>
    </div>

    <div class="footer-col">
        <div class="footer-icon ds">DS</div>
        <div>
            <div class="footer-title">НАШ DISCORD</div>
            <div class="footer-sub"><?= htmlspecialchars($SITE['discord']) ?></div>
        </div>
    </div>

    <div class="footer-col">
        <?= icon('people', 'footer-icon-svg') ?>
        <div>
            <div class="footer-sub">ОНЛАЙН СЕЙЧАС</div>
            <div class="footer-online"><?= number_format($SITE['online'], 0, '.', ' ') ?></div>
            <div class="footer-sub">ИГРОКОВ</div>
        </div>
    </div>

    <div class="footer-col">
        <div>
            <div class="footer-title">СЛЕДИТЕ ЗА НАМИ</div>
            <div class="footer-sub">Будьте в курсе всех событий проекта</div>
        </div>
        <div class="footer-actions">
            <?= icon('bell', 'footer-action') ?>
            <?= icon('star', 'footer-action') ?>
            <?= icon('gift', 'footer-action') ?>
        </div>
    </div>

    <div class="footer-col right">
        <div>
            <div class="footer-title"><?= htmlspecialchars($SITE['name']) ?> &copy; <?= $SITE['year'] ?></div>
            <div class="footer-sub">Все права защищены</div>
        </div>
    </div>
</footer>

</body>
</html>
