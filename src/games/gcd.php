<?php

namespace Src\Games\Gcd;

use Brain\Src\Structure;

use const Brain\Src\Structure\MAX_AMOUNT_SOLUTION;

function getMaxDivider()
{
    for ($solution = 1; $solution  <= MAX_AMOUNT_SOLUTION; $solution++) {
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
        $questionAnswer[$question] = (int) $maxDivider;
    }
    return $questionAnswer;
}

function getResultGames()
{
    $game = getMaxDivider();
    $introduction = 'Find the greatest common divisor of given numbers.';
    $nameUser = Structure\askUserName($introduction);
    $resultGame = Structure\checkTerms($game, $nameUser);
}
