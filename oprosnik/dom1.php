<?php
echo "<body style='background-color:pink'>";

$answer = [$_POST['q1'], $_POST['q2'], $_POST['q3'], $_POST['q4'], $_POST['q5'], $_POST['q6'], $_POST['q7'], $_POST['q8'], $_POST['q9'], $_POST['q10']];
$true_answer = ["35", "56", "70", "45", "125", "16", "81", "42", "27", "91"];

$b = 0;
$c = 0;

for ($i = 0; $i < count($answer); $i++) {
    if ($answer[$i] == $true_answer[$i]) {
        $b = $b + 1;
    } else {
        $c = $c + 1;
    }
}
if ($b >= 5) {
    echo "количество правильных ответов  " . $b . "<br>";
    echo "вы знаете таблицу умножения)";
} else {
    echo "количество  не правильных ответов  " . $c . "<br>";
    echo "вы не знаете таблицу умножения(";
}
