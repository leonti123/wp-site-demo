<?php
/*
 * Plugin Name: Demo style
 * Description: Стили демо-сайта: акцентный цвет, карточки, скрытый заголовок на главной.
 */
add_action('wp_head', function () {
    ?>
    <style>
        :root { --demo-accent: #e8590c; }
        .demo-accent .wp-block-button__link { background: var(--demo-accent); color: #fff; }
        .demo-accent .wp-block-button__link:hover { background: #c94a06; }
        .wp-block-cover .is-style-outline .wp-block-button__link { color: #fff; border-color: #fff; }
        .demo-card { background: #fff; border: 1px solid #ececec; border-radius: 16px; padding: 28px !important;
                     box-shadow: 0 8px 24px rgba(0, 0, 0, .05); }
        .demo-card ul { padding-left: 1.1em; }
        .demo-card li { margin: .4em 0; }
        .demo-num { color: var(--demo-accent); font-weight: 700; margin-bottom: 0; }
        .demo-muted { opacity: .6; }
        body.home .wp-block-post-title { display: none; }
        body.home main > .wp-block-group:first-child { padding-top: 0 !important; margin-top: 0 !important; }
    </style>
    <?php
});
