<?php
$n = $_POST["q1"];

$b = 1;

for ($i = 1; $i <= $n; $i++) {
    $b = $b * $i;
}
echo "Факториал $n=".$b;
