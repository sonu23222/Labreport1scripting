<?php
function addLastChar($str) {
    if (strlen($str) >= 1) {
        $lastChar = substr($str, -1);
        return $lastChar . $str . $lastChar;
    }
    return $str;
}
$inputs = ["one day", "Day one", "0"];
foreach ($inputs as $input) {
    echo addLastChar($input) . "<br>";
}
?>