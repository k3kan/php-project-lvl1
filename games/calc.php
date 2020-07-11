<?php

namespace Games\Calc;

function getCalculation()
{
    for ($i = 0; $i < 3; $i++) {
        $rand1 = rand(1, 100);
        $rand2 = rand(1, 100);
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
