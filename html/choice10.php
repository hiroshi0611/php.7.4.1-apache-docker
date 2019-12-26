<?php

$names = ["andy","betty","carol"];

for ($i=0; $i < count($names); $i++) { 
    if ($names[$i] != "andy") {
        echo "hello!!!";
        echo $names[$i] . PHP_EOL;
    }
}