<?php

namespace Games\Calc;

use Brain\Games\Structure;

function getCalculation()
{
    for ($attempt = 0; $attempt < 3; $attempt++) {
        $randomNumberOne = Structure\randomNumber();
        $randomNumberTwo = Structure\randomNumber();
        $result = 0;
        $operation = ['+', '-', '*'];
        $calculation = $operation[rand(0, 2)];
        $question = "Question: {$randomNumberOne} {$calculation} {$randomNumberTwo}";
        if ($calculation === '+') {
            $result = $randomNumberOne + $randomNumberTwo;
        } elseif ($calculation === '-') {
            $result = $randomNumberOne - $randomNumberTwo;
        } elseif ($calculation === '*') {
            $result = $randomNumberOne * $randomNumberTwo;
        }
        $arrayOperations[$question] = (int) $result;
    }
    return $arrayOperations;
}
