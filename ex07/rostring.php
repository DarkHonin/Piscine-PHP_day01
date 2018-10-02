<?php

$str = $argv[1];

function ft_split(String $strig)
{
    $hold = explode(' ', $strig);
    $e = 0;
    $ret = [];
    foreach($hold as $i)
        if (!empty($i))
            $ret[$e++] = $i;
        else
            unset($i);
    return $ret;
}

$words = ft_split($str);
$words = array_reverse($words);
$hold = array_pop($words);
$words = array_reverse($words);
array_push($words, $hold);
$str = implode(' ', $words);
echo "$str\n";
?>