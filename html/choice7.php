<?php

$diceA = 6;
$diceB ="6";

if ($diceA == $diceB){//型が違っても==なら変換されて参照される
    echo "win";
}else{
    echo "lose";
}
echo PHP_EOL;

/////////////////////////////////////


$diceA = 6;
$diceB ="6";

if ($diceA === $diceB){//===なら型が違うとその時点でfalse
    echo "win";
}else{
    echo "lose";
}
echo PHP_EOL;


/////////////////////////////////////


$diceA = 6;
$diceB ="6";

$diceBint = (int)$diceB;//(int)でデータ型を変更できる。キャストと呼ぶ

if ($diceA === $diceBint){
    echo "win";
}else{
    echo "lose";
}
echo PHP_EOL;
