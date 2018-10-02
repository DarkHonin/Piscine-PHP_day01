<?php



$ar = array_reverse($argv);
array_pop($ar);
$ar = array_reverse($ar);

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
    sort($ret);
    return $ret;
}

$upper = [];
$lower = [];

foreach($ar as $a)
{
    $sub = ft_split($a);
    foreach($sub as $k)
        if (ctype_upper($k[0]))
            array_push($upper, $k);
        else
            array_push($lower, $k);
}
sort($upper);
sort($lower);
foreach($upper as $s)
    echo "$s\n";
foreach($lower as $s)
    echo "$s\n";
?>