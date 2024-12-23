<?php
function minutesToSeconds($minutes)
{
    return $minutes * 60;
}
$minutes = 500;
echo "$minutes minutes is equal to " . minutesToSeconds($minutes) . " seconds.";