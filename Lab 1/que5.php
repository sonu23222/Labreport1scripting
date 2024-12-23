<?php
function calculateTriangleArea($base, $height)
{
    return 0.5 * $base * $height;
}
$base = 3;
$height = 5;
echo "The area of the triangle is: " . calculateTriangleArea($base, $height) . " square units.";