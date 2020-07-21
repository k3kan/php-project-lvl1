<?php

namespace Src\Games\Gcd;

use Brain\Src\Structure;

function getMaxDivider()
{
    $randomNumberOne = Structure\randomNumber();
    $randomNumberTwo = Structure\randomNumber();
    $randomNumberOne < $randomNumberTwo ? $least = $randomNumberOne : $least = $randomNumberTwo;
    $maxDivider = 1;
    $question = "Question: {$randomNumberOne} {$randomNumberTwo}";
    for ($checkDivider = 2; $checkDivider <= $least; $checkDivider++) {
        if ($randomNumberOne % $checkDivider === 0 && $randomNumberTwo % $checkDivider === 0) {
            $maxDivider = $checkDivider;
        }
    }
    $questionAnswer = [$question, (int) $maxDivider];
    return $questionAnswer;
}
