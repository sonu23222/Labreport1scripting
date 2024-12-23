<?php
function fourCopiesOfTwoChars($str) {
    if (strlen($str) < 2) {
        return $str;
    }
    $front = substr($str, 0, 2);
    return $front . $front . $front . $front;
}

echo fourCopiesOfTwoChars("sa") . "<br>"; 
echo fourCopiesOfTwoChars("re") . "<br>";     
echo fourCopiesOfTwoChars("ga") . "<br.";      