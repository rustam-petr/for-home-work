<?php
$str="at uiti a abc nlknl cba';l;mcban abc";
//echo $str;a
$regexp="/\b(abc)\b/iu";
echo preg_match_all($regexp,$str,$matches)."<br>";
print_r($matches);
