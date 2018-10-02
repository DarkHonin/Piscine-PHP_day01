<?php

$ar = array_reverse($argv);
array_pop($ar);
$ar = array_reverse($ar);

foreach($ar as $a)
{
    echo "$a\n";
}

?>