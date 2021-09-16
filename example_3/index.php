<?php
$title = 'Главная страница - страница обо мне';
$h1 = 'Информация обо мне';
$year = 2018;

$content = file_get_contents('templates/template_3.tmpl');
$content = str_ireplace('{{ title }}', $title, $content);
$content = str_ireplace('{{ h1 }}', $h1, $content);
$content = str_ireplace('{{ year }}', $year, $content);

echo $content;
