<?php

namespace Src\Games\Calc;

use Brain\Src\Structure;

use const Brain\Src\Structure\MAX_AMOUNT_SOLUTION;

function getCalculation()
{
    for ($solution = 1; $solution  <= MAX_AMOUNT_SOLUTION; $solution++) {
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
        $questionAnswer[$question] = (int) $result;
    }
    return $questionAnswer;
}

function getResultGames()
{
    $game = getCalculation();
    $introduction = 'What is the result of the expression?';
    $nameUser = Structure\askUserName($introduction);
    $resultGame = Structure\checkTerms($game, $nameUser);
}
