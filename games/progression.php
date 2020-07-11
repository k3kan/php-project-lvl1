<?php

namespace Games\Progression;

function getprogression()
{
    for ($i = 0; $i < 3; $i++) {
        $step = rand(1, 10);
        $startNumber = rand(1, 100);
        $array = [];
        $number = $startNumber;
        $amountElementsSequences = 10;
        for ($ElementsSequences = 0; $ElementsSequences  < $amountElementsSequences; $ElementsSequences++) {
            $number += $step;
            $array[] = $number;
        }
        $closeNumber = rand(0, 9);
        $temp = $array[$closeNumber];
        $array[$closeNumber] = '..';
        $string = implode(' ', $array);
        $arrayAllOperations[$string] = (int) $temp;
    }
    return $arrayAllOperations;
}
