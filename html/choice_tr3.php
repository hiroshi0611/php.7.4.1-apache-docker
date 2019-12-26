<?php

$id = $argv[1];
$password = $argv[2];

if ($id == "Andy" && $password == "secret"){
    echo "Login完了" . PHP_EOL;
}else{
    echo "IDかPASSWORDが間違っています" . PHP_EOL;
}