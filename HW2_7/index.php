<?php
//$d = date('H:i');

function text_date()
{
    $h = date('H');
    $m = date('i');
    $text1 = '';
    $text2 = '';
    if ($h == 0 | ($h >= 5 && $h <= 20)) $text1 = ' часов';
    else if ($h == 1 | $h == 21) $text1 = 'час';
    else if (($h >= 2 && $h <= 4) | ($h >= 22 && $h <= 24)) $text1 = ' часа';

    if (($m == 0) | ($m >= 5 && $m <= 20) | ($m >= 25 && $m <= 30) | ($m >= 35 && $m <= 40) | ($m >= 45 && $m <= 50) | ($m >= 55 && $m <= 59)) $text2 = ' минут';
    else if ($m == 1 | $m == 21 | $m == 31 | $m == 41 | $m == 51) $text2 = ' минута';
    else if (($m >= 2 && $m <= 4) | ($m >= 22 && $m <= 24) | ($m >= 32 && $m <= 34) | ($m >= 42 && $m <= 44) | ($m >= 52 && $m <= 54)) $text2 = ' минуты';

    return $h . $text1 . ' ' . $m . $text2;
}

echo(text_date());