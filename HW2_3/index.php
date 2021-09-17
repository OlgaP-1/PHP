<?php
function one($x = 0, $y = 0){
    if ($y == 0) return ('На ноль делить нельзя!');
    if ($y != 0) return $x / $y;
}
function two($x = 0, $y = 0){
    return $x * $y;
}
function three($x = 0, $y = 0){
    return $x + $y;
}
function four($x = 0, $y = 0){
    return $x - $y;
}
function five($x = 0, $y = 0){
    return $x ** $y;
}


echo ('результат функции 1: '. one(25, 0)).'<br>';
echo ('результат функции 2: '. two(25, 5)).'<br>';
echo ('результат функции 3: '. three(25, 5)).'<br>';
echo ('результат функции 4: '. four(25, 5)).'<br>';
echo ('результат функции 5: '. five(25, 2)).'<br>';