<?php

function ft_is_sort(array $ar) : bool{
    $ss = $ar;
    sort($ss);
    foreach($ss as $k=>$q){
        if ($q != $ar[$k])
            return false;
    }
    return true;
}
?>