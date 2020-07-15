<?php

namespace Games\Even;

function getEvenOrNot()
{
    for ($attempt = 0; $attempt < 3; $attempt++) {
        $randomNumber = rand(1, 100);
        $question = "Question: {$randomNumber}";
        $randomNumber % 2 === 0 ? $answer = 'yes' : $answer = 'no';
        $arrayOperations[$question] = $answer;
    }
    return $arrayOperations;
}
