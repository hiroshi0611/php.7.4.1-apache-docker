<?php

$names = ["hiroshi", "imaizumi", "rie"];

$names[1] = $names[2];
$names[0] = $names[1];

var_dump($names);