<?php

namespace Src\Games\Even;

use Brain\Src\Structure;

use const Brain\Src\Structure\QUESTIONS;

const INTRODUCTION = 'Answer "yes" if the number is even, otherwise answer "no".';

function getEvenOrNot(): array
{
    $questionAnswer = [];
    for ($i = 1; $i <= QUESTIONS; $i++) {
        $randomNumber = Structure\randomNumber();
        $randomNumber % 2 === 0 ? $answer = 'yes' : $answer = 'no';
        $questionAnswer[$randomNumber]  = $answer;
    }
    return $questionAnswer;
}

function runGame(): void
{
    $game = getEvenOrNot();
    Structure\outputResult($game, INTRODUCTION);
}
