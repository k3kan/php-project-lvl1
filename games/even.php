<?php

namespace Games\Even;

use Brain\Games\Structure;

function getEvenOrNot()
{
    $randomNumber = Structure\randomNumber();
    $question = "Question: {$randomNumber}";
    $randomNumber % 2 === 0 ? $answer = 'yes' : $answer = 'no';
    $arrayOperations = [$question, $answer];
    return $arrayOperations;
}
