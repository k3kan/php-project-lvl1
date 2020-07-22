<?php

namespace Src\Games\Progression;

use Brain\Src\Structure;

use const Brain\Src\Structure\MAX_AMOUNT_SOLUTION;

function getProgression()
{
    for ($solution = 1; $solution  <= MAX_AMOUNT_SOLUTION; $solution++) {
        $step = rand(1, 10);
        $startNumber = Structure\randomNumber();
        $sequences = [];
        $number = $startNumber;
        $amountElementsSequences = 10;
        for ($elementsSequences = 0; $elementsSequences  < $amountElementsSequences; $elementsSequences++) {
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

function getResultGames()
{
    $game = getProgression();
    $introduction = 'What number is missing in the progression?';
    $nameUser = Structure\askUserName($introduction);
    $resultGame = Structure\checkTerms($game, $nameUser);
}
