<?php


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

?>