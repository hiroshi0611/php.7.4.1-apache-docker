<?php

$score = $argv[1];

if ($score >= 80) {

    echo $score . "点"  . ": A判定";
} else if ($score >= 60) {

    echo $score . "点"  . ": B判定";
} else {

    echo "$score 点 : C判定";
}


echo PHP_EOL;
