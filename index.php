<?php

$first     = '';
$second    = 2;
$third     = null;
$fourth    = 4;
$fifth     = false;
$sixth     = 6;

$result1   = $first ?? $second;
$result2   = $third ?? $fourth;
$result3   = $fifth ?? $sixth;
$result4   = $second ?? $fourth;

$result5   = $first ?: $second;
$result6   = $third ?: $fourth;
$result7   = $fifth ?: $sixth;
$result8   = $second ?: $fourth;

$result9   = isset($first) ? $first : $second;
$result10  = isset($third) ? $third : $fourth;
$result11  = isset($fifth) ? $fifth : $sixth;
$result12  = isset($second) ? $second : $fourth;

$result13  = empty($first) ? $first : $second;
$result14  = empty($third) ? $third : $fourth;
$result15  = empty($fifth) ? $fifth : $sixth;
$result16  = empty($second) ? $second : $fourth;

for($i = 1; $i <= 16; $i++)
{
    echo "result.$i"." = ".${"result$i"}.'<br>';
    
    if($i % 4 == 0)
    {
        echo '<br>';
    }
}
