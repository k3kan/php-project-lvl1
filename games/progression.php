<?php

namespace Games\Progression;

use Brain\Games\Structure;

function getProgression()
{
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
    $arrayOperations = [$question, (int) $temp];
    return $arrayOperations;
}
