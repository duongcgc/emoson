<?php do_action('gcod_before_main_nav'); ?>

<nav id="site-navigation" class="main-navigation">
    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"></button>

    <?php
        do_action('gcod_header_menu');         
    ?>
</nav>

<?php do_action('gcod_after_main_nav'); ?>