<?php
//4. Объявить массив, индексами которого являются буквы русского языка,
// а значениями – соответствующие латинские буквосочетания
// (‘а'=> 'a', ‘б' => ‘b', ‘в' => ‘v', ‘г' => ‘g', …, ‘э' => ‘e', ‘ю' => ‘yu', ‘я' => ‘ya').
//Написать функцию транслитерации строк. Она должна учитывать и заглавные буквы.
function translite($str){
    $alfabet = [
        'а' => 'a',   'б' => 'b',   'в' => 'v',
        'г' => 'g',   'д' => 'd',   'е' => 'e',
        'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
        'и' => 'i',   'й' => 'y',   'к' => 'k',
        'л' => 'l',   'м' => 'm',   'н' => 'n',
        'о' => 'o',   'п' => 'p',   'р' => 'r',
        'с' => 's',   'т' => 't',   'у' => 'u',
        'ф' => 'f',   'х' => 'h',   'ц' => 'c',
        'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
        'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
        'э' => 'e',   'ю' => 'yu',  'я' => 'ya'
    ];
    $str = mb_strtolower($str);
    $str2 = [];
    for($i=0; $i < strlen($str);  $b = mb_substr($str, $i, 1), array_push($str2, $alfabet[$b]) , $i++);
    $text = implode('', $str2);
    return $text;
}

$str = 'Автобус';
echo translite($str);