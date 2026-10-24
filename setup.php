<?php
// Наполнение демо-сайта: главная страница из блоков Gutenberg, страницы, меню
require_once '/wordpress/wp-load.php';

$home = <<<'HTML'
<!-- wp:cover {"url":"https://images.unsplash.com/photo-1581578731548-c64695cc6952?w=1800&q=70","dimRatio":60,"overlayColor":"contrast","minHeight":620,"align":"full"} -->
<div class="wp-block-cover alignfull" style="min-height:620px"><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="https://images.unsplash.com/photo-1581578731548-c64695cc6952?w=1800&q=70" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":1,"fontSize":"xx-large"} -->
<h1 class="wp-block-heading has-text-align-center has-xx-large-font-size">Мастер на час — приедем сегодня</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size">Повесим, соберём, починим. Фиксированные цены, гарантия на работы 1 год.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"demo-accent"} -->
<div class="wp-block-button demo-accent"><a class="wp-block-button__link wp-element-button" href="#contact">Вызвать мастера</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#prices">Смотреть цены</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"anchor":"prices","layout":{"type":"constrained"},"style":{"spacing":{"padding":{"top":"80px","bottom":"80px"}}}} -->
<div id="prices" class="wp-block-group" style="padding-top:80px;padding-bottom:80px"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">Услуги и цены</h2>
<!-- /wp:heading -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"className":"demo-card"} -->
<div class="wp-block-column demo-card"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">🔨 Мелкий ремонт</h3>
<!-- /wp:heading -->

<!-- wp:list -->
<ul><!-- wp:list-item --><li>Повесить полку, карниз, ТВ — от 600 ₽</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Заменить смеситель — от 900 ₽</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Отрегулировать дверь — от 500 ₽</li><!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"demo-card"} -->
<div class="wp-block-column demo-card"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">🪑 Сборка мебели</h3>
<!-- /wp:heading -->

<!-- wp:list -->
<ul><!-- wp:list-item --><li>Шкаф, комод, кровать — от 1 500 ₽</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Кухонный гарнитур — от 6 000 ₽</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Вывоз упаковки — бесплатно</li><!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"demo-card"} -->
<div class="wp-block-column demo-card"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">💡 Электрика</h3>
<!-- /wp:heading -->

<!-- wp:list -->
<ul><!-- wp:list-item --><li>Розетка или выключатель — от 400 ₽</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Повесить люстру — от 900 ₽</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Найти неисправность — от 1 000 ₽</li><!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","backgroundColor":"base-2","layout":{"type":"constrained"},"style":{"spacing":{"padding":{"top":"80px","bottom":"80px"}}}} -->
<div class="wp-block-group alignfull has-base-2-background-color has-background" style="padding-top:80px;padding-bottom:80px"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">Как мы работаем</h2>
<!-- /wp:heading -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"align":"center","fontSize":"xx-large","className":"demo-num"} -->
<p class="has-text-align-center demo-num has-xx-large-font-size">1</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><strong>Заявка</strong><br>Оставляете заявку на сайте или звоните</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"align":"center","fontSize":"xx-large","className":"demo-num"} -->
<p class="has-text-align-center demo-num has-xx-large-font-size">2</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><strong>Цена заранее</strong><br>Называем стоимость до выезда</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"align":"center","fontSize":"xx-large","className":"demo-num"} -->
<p class="has-text-align-center demo-num has-xx-large-font-size">3</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><strong>Выезд за 2 часа</strong><br>Мастер приезжает с инструментом</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"align":"center","fontSize":"xx-large","className":"demo-num"} -->
<p class="has-text-align-center demo-num has-xx-large-font-size">4</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><strong>Гарантия</strong><br>Оплата после работы, гарантия 1 год</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"},"style":{"spacing":{"padding":{"top":"80px","bottom":"80px"}}}} -->
<div class="wp-block-group" style="padding-top:80px;padding-bottom:80px"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">Отзывы</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"demo-muted"} -->
<p class="has-text-align-center demo-muted">Примеры отзывов (демо-контент)</p>
<!-- /wp:paragraph -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"className":"demo-card"} -->
<div class="wp-block-column demo-card"><!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p>Собрали шкаф и кровать за два часа, всё ровно и аккуратно, мусор забрали.</p>
<!-- /wp:paragraph --><cite>Ольга</cite></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"demo-card"} -->
<div class="wp-block-column demo-card"><!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p>Приехали в тот же день, поменяли смеситель. Цена совпала с той, что назвали по телефону.</p>
<!-- /wp:paragraph --><cite>Игорь</cite></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"demo-card"} -->
<div class="wp-block-column demo-card"><!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p>Повесили телевизор и три полки, провода спрятали в кабель-канал. Рекомендую.</p>
<!-- /wp:paragraph --><cite>Наталья</cite></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"contact","align":"full","backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"},"style":{"spacing":{"padding":{"top":"80px","bottom":"80px"}}}} -->
<div id="contact" class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background" style="padding-top:80px;padding-bottom:80px"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">Вызвать мастера</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Ежедневно 8:00–22:00 · +7 (900) 000-00-00 · ул. Примерная, 1</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"demo-accent"} -->
<div class="wp-block-button demo-accent"><a class="wp-block-button__link wp-element-button" href="#">Оставить заявку</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
HTML;

$front = wp_insert_post([
    'post_type' => 'page', 'post_status' => 'publish',
    'post_title' => 'Главная', 'post_content' => $home,
]);
foreach (['Услуги', 'О нас', 'Контакты'] as $title) {
    wp_insert_post(['post_type' => 'page', 'post_status' => 'publish', 'post_title' => $title,
        'post_content' => '<!-- wp:paragraph --><p>Страница «' . $title . '» (демо).</p><!-- /wp:paragraph -->']);
}
update_option('show_on_front', 'page');
update_option('page_on_front', $front);
// Убираем стандартную запись «Привет, мир!» и страницу-пример
foreach (get_posts(['post_type' => ['post', 'page'], 'post_status' => 'any', 'numberposts' => -1]) as $p) {
    if (in_array($p->post_name, ['hello-world', 'sample-page'], true)) {
        wp_delete_post($p->ID, true);
    }
}
