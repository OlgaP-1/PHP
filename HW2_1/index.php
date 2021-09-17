<?php
$a = rand(-10, 10);
$b = rand(-10, 10);
if ($a >= 0 && $b >= 0) {
    echo ($a) . '<br>';
    echo ($b) . '<br>';
} else if ($a <= 0 && $b <= 0) {
    echo ($a) . '<br>';
    echo ($b) . '<br>';
} else if (($a <= 0 && $b >= 0) | ($a >= 0 && $b <= 0)) {
    echo ($a) . '<br>';
    echo ($b) . '<br>';
}