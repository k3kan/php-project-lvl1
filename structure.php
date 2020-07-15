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

function computation()
{
    require_once ('games/calc.php');
    require_once ('games/even.php');
    require_once ('games/gcd.php');
    require_once ('games/prime.php');
    require_once ('games/progression.php');
    $operations = [getCalculation(), getEvenOrNot(), getMaxDivider(), getBrainPrime(), getProgression()];
    return $operations;
}

function getGameAndSolution()
{
    $operations = computation();
    $nameGames = ['calc', 'even', 'gcd', 'prime', 'progression'];
    $countGames = count($nameGames);
    $nameGameAndSolution = [];
    for ($element = 0; $element < $countGames; $element++) {
        $nameGameAndSolution[$nameGames[$element]] = $operations[$element];
    }
    return $nameGameAndSolution;
}

function getOutputGame(string $nameGame)
{
    $arrayGames = getGameAndSolution();
    foreach ($arrayGames as $game => $questionAnswer) {
        if ($nameGame === $game) {
            $selectedGame = $questionAnswer;
        }
    }
    $UserName = askUserName();
    checkTerms($selectedGame, $UserName);

}