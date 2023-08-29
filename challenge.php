<?php
function prima($x)
{
    if ($x <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($x); $i++) {
        if ($x % $i == 0) {
            return false;
        }
    }
    return true;
}

for ($i = 25; $i <= 50; $i++) {
    if (prima($i)) {
        echo $i . "\n";
    }
}
