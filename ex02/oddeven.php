<?php

while (true)
{
    $input = readline ("Enter a number: ");
    if ($input == 0)
    {
        echo "\n";
        break;
    }
    if (!is_numeric($input))
    {
        echo "'$input' is not a valid number\n";
        continue;
    }
    echo "The number $input is ";
    if ($input % 2 == 0)
       echo "even\n";
    else
       echo "odd\n";
}

?>