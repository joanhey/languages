<?php

function fibonacci(int $n): int
{
    return match($n) {
        0,1 => $n,
        default => fibonacci($n - 1) + fibonacci($n - 2)
    };
}

$u = (int) $argv[1];
$r = 0;
for ($i = 0; $i < $u; $i++) {
    $r += fibonacci($i);
}
echo $r;
