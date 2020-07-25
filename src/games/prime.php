<?php

namespace Src\Games\Prime;

use Brain\Src\Structure;

use const Brain\Src\Structure\QUESTIONS;

const INTRODUCTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPrime(int $n): bool
{
    if ($n < 2) {
        return false;
    }
    $sqrt = sqrt($n);
    for ($bruteForce = 2; $bruteForce <= $sqrt; $bruteForce++) {
        if ($n % $bruteForce === 0) {
            return false;
        }
    }
    return true;
}

function getBrainPrime()
{
    for ($i = 1; $i  <= QUESTIONS; $i++) {
        $randomNumber = Structure\randomNumber();
        isPrime($randomNumber) ? $answer = 'yes' : $answer = 'no';
        $question = " {$randomNumber}";
        $questionAnswer[$question] = $answer;
    }
    return $questionAnswer;
}

function runGame()
{
    $game = getBrainPrime();
    Structure\outputResult($game, INTRODUCTION);
}
