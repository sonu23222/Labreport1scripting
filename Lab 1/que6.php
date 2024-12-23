<?php
function ageInDays($ageInYears)
{
    return $ageInYears * 365;
}
$age = 19;
echo "The age in days is: " . ageInDays($age) . " days.";