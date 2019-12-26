<?php

$colors = ["RED","GREEN","BLUE"];

// unset($colors[0]);

array_splice($colors,0,1);

var_dump($colors);