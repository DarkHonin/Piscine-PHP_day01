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

$out = [];


foreach($ar as $a)
{
    $sub = ft_split($a);
    $out = array_merge($out, $sub);
}
sort($out, SORT_STRING | SORT_FLAG_CASE);
foreach($out as $k=>$a)
    if (ctype_alpha($a[0])){
        echo "$a\n";
        $out[$k] = "";
    }
foreach($out as $k=>$a)
    if (!empty($a) && ctype_digit($a[0]))
    {
        echo "$a\n";
        $out[$k] = "";
    }
sort($out);
foreach($out as $a)
    if (!empty($a))
    {
        echo "$a\n";
        $a = "";
    }
?>