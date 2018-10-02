<?php

$str = $argv[1];
$parts = explode(' ', $str);
foreach ($parts as $p){
    if (!empty($p))
        echo "$p ";
}
echo "\n";

?>