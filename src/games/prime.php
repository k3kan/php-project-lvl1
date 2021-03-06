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

function getBrainPrime(): array
{
    $questionAnswer = [];
    for ($i = 1; $i  <= QUESTIONS; $i++) {
        $randomNumber = Structure\randomNumber();
        isPrime($randomNumber) ? $answer = 'yes' : $answer = 'no';
        $questionAnswer[$randomNumber] = $answer;
    }
    return $questionAnswer;
}

function runGame(): void
{
    $game = getBrainPrime();
    Structure\outputResult($game, INTRODUCTION);
}
