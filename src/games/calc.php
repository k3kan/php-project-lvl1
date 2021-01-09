<?php

namespace Src\Games\Calc;

use Brain\Src\Structure;

use const Brain\Src\Structure\QUESTIONS;

const INTRODUCTION = 'What is the result of the expression?';

function getCalculation(): array
{
    $questionAnswer = [];
    for ($i = 1; $i  <= QUESTIONS; $i++) {
        $randomNumberOne = Structure\randomNumber();
        $randomNumberTwo = Structure\randomNumber();
        $result = 0;
        $operations = ['+', '-', '*'];
        $operation = array_rand($operations);
        $question = "{$randomNumberOne} {$operations[$operation]} {$randomNumberTwo}";
        if ($operations[$operation] === '+') {
            $result = $randomNumberOne + $randomNumberTwo;
        } elseif ($operations[$operation] === '-') {
            $result = $randomNumberOne - $randomNumberTwo;
        } else {
            $result = $randomNumberOne * $randomNumberTwo;
        }
        $questionAnswer[$question] = (int) $result;
    }
    return $questionAnswer;
}

function runGame(): void
{
    $game = getCalculation();
    Structure\outputResult($game, INTRODUCTION);
}
