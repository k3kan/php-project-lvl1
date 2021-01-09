<?php

namespace Src\Games\Gcd;

use Brain\Src\Structure;

use const Brain\Src\Structure\QUESTIONS;

const INTRODUCTION = 'Find the greatest common divisor of given numbers.';

function getMaxDivider()
{
    for ($i = 1; $i <= QUESTIONS; $i++) {
        $randomNumberOne = Structure\randomNumber();
        $randomNumberTwo = Structure\randomNumber();
        $maxDivider = 1;
        $question = "{$randomNumberOne} {$randomNumberTwo}";
        for ($checkDivider = 2; $checkDivider <= $randomNumberOne; $checkDivider++) {
            if ($randomNumberOne % $checkDivider === 0 && $randomNumberTwo % $checkDivider === 0) {
                $maxDivider = $checkDivider;
            }
        }
        $questionAnswer[$question] = (int) $maxDivider;
    }
    return $questionAnswer;
}

function runGame()
{
    $game = getMaxDivider();
    Structure\outputResult($game, INTRODUCTION);
}
