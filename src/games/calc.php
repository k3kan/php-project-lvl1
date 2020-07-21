<?php

namespace Src\Games\Calc;

use Brain\Src\Structure;

function getCalculation()
{
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
    $questionAnswer = [$question, (int) $result];
    return $questionAnswer;
}
