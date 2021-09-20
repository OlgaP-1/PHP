<?php
//5. Написать функцию, которая заменяет в строке пробелы
// на подчеркивания и возвращает видоизмененную строчку.
// Можно через str_replace

function space_replace($str){
    $text = str_replace(' ', "_", $str);
    return $text;
}

$str = 'Hello World of PHP';
echo space_replace($str);