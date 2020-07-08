<?php

namespace Games\Calc;

use function cli\prompt;
use function cli\line;
use function games\Structure\random;

function getCalculation()
{
    for ($i = 0; $i < 3; $i++) {
        $rand1 = random();
        $rand2 = random();
        $result = 0;
        $operation = ['+', '-', '*'];
        $calculation = $operation[rand(0, 2)];
        $question = "Question: {$rand1} {$calculation} {$rand2}";
        if ($calculation === '+') {
            $result = $rand1 + $rand2;
        } elseif ($calculation === '-') {
            $result = $rand1 - $rand2;
        } elseif ($calculation === '*') {
            $result = $rand1 * $rand2;
        }
        $arrayAllOperations[$question] = (int) $result;
    }
    return $arrayAllOperations;
}

getCalculation();