<?php

$ar = array_reverse($argv);
array_pop($ar);
$ar = array_reverse($ar);
if (empty($ar))
    die("Incorrect Parameters");

$p = function ($v, $c){
    return $v + $c;
};

$m = function ($v, $c){
    return $v - $c;
};

$d = function ($v, $c){
    return $v / $c;
};

$mo = function ($v, $c){
    return $v % $c;
};

$mu = function ($v, $c){
    return $v * $c;
};

$fns = [
    "+" => $p,
    "-" => $m,
    "/" => $d,
    "%" => $mo,
    "*" => $mu
];


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

function is_opperator(string $c): bool{
    global $fns;
    if (strlen($c) != 1)
        die("Invlid input");
    foreach(array_keys($fns) as $oo)
        if ($c == $oo)
            return true;
    return false;
}

$values = [];
$oppera = ["+"];
$out = [];

foreach($ar as $a)
{
    $sub = ft_split($a);
    $out = array_merge($out, $sub);
}

foreach($out as $q)
{
    if (is_numeric($q))
        array_push($values, $q);
    else if (is_opperator($q))
        array_push($oppera, $q);
}

$total = 0;
foreach($values as $k=>$v){
    $total = $fns[$oppera[$k]]($total, $v);
}
echo "$total\n";
?>