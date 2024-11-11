<div class="language-switcher">
    <button id="languageToggle" class="language-toggle__btn">
        <?php echo $_SESSION['lang'] === 'en' ? 'EN' : 'SW'; ?>
    </button>
    <div class="language-dropdown">
        <a href="?lang=en" class="<?php echo $_SESSION['lang'] === 'en' ? 'active' : ''; ?>">English</a>
        <a href="?lang=sw" class="<?php echo $_SESSION['lang'] === 'sw' ? 'active' : ''; ?>">Swahili</a>
    </div>
</div> 