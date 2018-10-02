<?php
$x = 0;

while ($x < 1000)
{
    if ($x > 0 && $x % 100 == 0)
        echo "\n";
    echo "X";
    $x++;
}
echo "\n";
?>