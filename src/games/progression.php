<?php

namespace Src\Games\Progression;

use Brain\Src\Structure;

use const Brain\Src\Structure\QUESTIONS;

const INTRODUCTION = 'What number is missing in the progression?';

function getProgression()
{
    $questionAnswer = [];
    for ($i = 1; $i <= QUESTIONS; $i++) {
        $step = rand(1, 10);
        $sequences = [];
        $number = Structure\randomNumber();
        $endSequence = 10;
        for ($elements = 0; $elements  < $endSequence; $elements++) {
            $number += $step;
            $sequences [] = $number;
        }
        $closeNumber = rand(0, 9);
        $temp = $sequences [$closeNumber];
        $sequences [$closeNumber] = '..';
        $question = implode(' ', $sequences);
        $questionAnswer[$question] = (int) $temp;
    }
    return $questionAnswer;
}

function runGame(): void
{
    $game = getProgression();
    Structure\outputResult($game, INTRODUCTION);
}
