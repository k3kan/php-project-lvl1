<?php

namespace Games\Progression;

function getProgression()
{
    for ($i = 0; $i < 3; $i++) {
        $step = rand(1, 10);
        $startNumber = rand(1, 100);
        $sequences = [];
        $number = $startNumber;
        $amountElementsSequences = 10;
        for ($ElementsSequences = 0; $ElementsSequences  < $amountElementsSequences; $ElementsSequences++) {
            $number += $step;
            $sequences [] = $number;
        }
        $closeNumber = rand(0, 9);
        $temp = $sequences [$closeNumber];
        $sequences [$closeNumber] = '..';
        $string = implode(' ', $sequences);
        $arrayOperations[$string] = (int) $temp;
    }
    return $arrayOperations;
}
