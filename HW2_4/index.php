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

function mathOperation($arg1 = 0, $arg2 = 0, $operation = '') {
    switch ($operation) {
        case 'one': echo(one($arg1, $arg2));
//        default: echo 'что-то пошло не так';
    };
    switch ($operation) {
        case 'two': echo(two($arg1, $arg2));
//        default: echo 'что-то пошло не так';
    };
    switch ($operation) {
        case 'three': echo(three($arg1, $arg2));
//        default: echo 'что-то пошло не так';
    };
    switch ($operation) {
        case 'four': echo(four($arg1, $arg2));
//        default: echo 'что-то пошло не так';
    };
    switch ($operation){
        case 'five': echo(five($arg1, $arg2));
//        default: echo 'что-то пошло не так';
    }
}

mathOperation(25, 5, 'one');
