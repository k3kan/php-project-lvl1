<?php

namespace Brain\Games\Structure;

use function cli\prompt;
use function cli\line;
use function Games\Calc\getCalculation;
use function Games\Even\getEvenOrNot;
use function Games\Gcd\getMaxDivider;
use function Games\Prime\getBrainPrime;
use function Games\Progression\getProgression;

function randomNumber()
{
    return rand(1, 100);
}

function askUserName()
{
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}

function checkTerms($arrayCalculation, $UserName)
{
    $numberOfCorrectAttempts = 0;
    foreach ($arrayCalculation as $question => $answer) {
        line($question);
        $UserAnswer = prompt("You answer");
        if ($UserAnswer !== 'yes' && $UserAnswer !== 'no') {
            $UserAnswer= (int) $UserAnswer;
        }
        if ($UserAnswer === $answer) {
            line("Correct!");
            $numberOfCorrectAttempts++;
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $UserAnswer, $answer);
            line("Let's try again, %s!", $UserName);
            break;
        }
    }
    if ($numberOfCorrectAttempts === 3) {
        line("Congratulation, %s!", $UserName);
    }
}

function computation(string $nameGame)
{
    if ($nameGame === 'calc') {
        return getCalculation();
    }
    elseif ($nameGame === 'even') {
        return getEvenOrNot();
    }
    elseif ($nameGame === 'gcd') {
        return getMaxDivider();
    }
    elseif ($nameGame === 'prime') {
        return getBrainPrime();
    }
    elseif ($nameGame === 'progression') {
        return getProgression();
    }
}

function getQuestionAnswer(string $nameGame)
{
    $oneGame = [];
    $maxAmountSolution = 3;
    for ($solution = 0; $solution  < $maxAmountSolution; $solution ++) {
        $oneQuestionAnswer = computation($nameGame);
        $oneGame[$oneQuestionAnswer[0]] = $oneQuestionAnswer[1];
        }
    return $oneGame;
}

function getResultGames(string $nameGame)
{
    $nameUser = askUserName();
    $QuestionAnswer = getQuestionAnswer($nameGame);
    $resultGame = checkTerms($QuestionAnswer, $nameUser);
}
