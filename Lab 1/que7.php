<?php
function calculatePower($voltage, $current)
{
    return $voltage * $current;
}
$voltage = 150;
$current = 60;
echo "The calculated power is: " . calculatePower($voltage, $current) . " watts.";