<?php

namespace Games\Gcd;

function getMaxDivider()
{
    for ($numOfTry = 0; $numOfTry < 3; $numOfTry++) {
        $randomNumberOne = rand(1, 100);
        $randomNumberTwo = rand(1, 100);
        $randomNumberOne < $randomNumberTwo ? $least = $randomNumberOne : $least = $randomNumberTwo;
        $maxDivider = 1;
        $question = "Question: {$randomNumberOne} {$randomNumberTwo}";
        for ($checkDivider = 2; $checkDivider <= $least; $checkDivider++) {
            if ($randomNumberOne % $checkDivider === 0 && $randomNumberTwo % $checkDivider === 0) {
                $maxDivider = $checkDivider;
            }
        }
        $arrayOperations[$question] = (int) $maxDivider;
    }
    return $arrayOperations;
}
