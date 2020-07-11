<?php

namespace Games\Gcd;

function getgcd()
{
    for ($numOfTry = 0; $numOfTry < 3; $numOfTry++) {
        $num1 = rand(1, 100);
        $num2 = rand(1, 100);
        $num1 < $num2 ? $least = $num1 : $least = $num2;
        $nod = 1;
        $question = "Question: {$num1} {$num2}";
        for ($checkDivider = 2; $checkDivider <= $least; $checkDivider++) {
            if ($num1 % $checkDivider === 0 && $num2 % $checkDivider === 0) {
                $nod = $checkDivider;
            }
        }
        $arrayAllOperations[$question] = (int) $nod;
    }
    return $arrayAllOperations;
}
