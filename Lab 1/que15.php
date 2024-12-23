<?php
function getValueAtIndex($array, $index)
{
    if (isset($array[$index])) {
        return $array[$index];
    } else {
        return "Index out of bounds.";
    }
}
$myArray = ["Sonu", "BCA", "Girl", "date", "fig"];
$index = 2;
$result = getValueAtIndex($myArray, $index);
echo "Value at index $index: $result";