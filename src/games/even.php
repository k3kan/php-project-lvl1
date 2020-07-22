<?php

namespace Src\Games\Even;

use Brain\Src\Structure;

use const Brain\Src\Structure\MAX_AMOUNT_SOLUTION;

function getEvenOrNot()
{
    for ($solution = 1; $solution  <= MAX_AMOUNT_SOLUTION; $solution++) {
        $randomNumber = Structure\randomNumber();
        $question = "Question: {$randomNumber}";
        $randomNumber % 2 === 0 ? $answer = 'yes' : $answer = 'no';
        $questionAnswer[$question]  = $answer;
    }
    return $questionAnswer;
}

function getResultGames()
{
    $game = getEvenOrNot();
    $introduction = 'Answer "yes" if the number is even, otherwise answer "no"';
    $nameUser = Structure\askUserName($introduction);
    $resultGame = Structure\checkTerms($game, $nameUser);
}
