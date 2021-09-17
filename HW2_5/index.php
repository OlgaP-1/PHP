<?php

function renderTemplate($page, $menu = '', $content=''){
    ob_start();
    include $page . '.php';
    return ob_get_clean();
}

echo renderTemplate('layout', renderTemplate('menu'), renderTemplate('about'));