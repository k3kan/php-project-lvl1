<?php

namespace Brain\Src\Structure;

use function cli\prompt;
use function cli\line;
use function Src\Games\Calc\getCalculation;
use function Src\Games\Even\getEvenOrNot;
use function Src\Games\Gcd\getMaxDivider;
use function Src\Games\Prime\getBrainPrime;
use function Src\Games\Progression\getProgression;

function randomNumber()
{
    return rand(1, 100);
}

function askUserName(string $nameGame)
{
    line('Welcome to the Brain Game!');
    $introduction = ['calc' => 'What is the result of the expression?',
        'even' => 'Answer "yes" if the number is even, otherwise answer "no"',
        'gcd' => 'Find the greatest common divisor of given numbers.',
        'prime' => 'Answer "yes" if given number is prime. Otherwise answer "no".',
        'progression' => 'What number is missing in the progression?'];
    foreach ($introduction as $game => $resultGame) {
        if ($nameGame === $game) {
            line($resultGame);
        }
    }
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
            $UserAnswer = (int) $UserAnswer;
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
    $questionAnswerGame = ['calc' => getCalculation(),
        'even' => getEvenOrNot(), 'gcd' => getMaxDivider(),
        'prime' => getBrainPrime(), 'progression' => getProgression()];
    foreach ($questionAnswerGame as $game => $resultGame) {
        if ($nameGame === $game) {
            return $resultGame;
        }
    }
}

function getQuestionAnswer(string $nameGame)
{
    $oneGame = [];
    $maxAmountSolution = 3;
    for ($solution = 0; $solution  < $maxAmountSolution; $solution++) {
        $oneQuestionAnswer = computation($nameGame);
        $oneGame[$oneQuestionAnswer[0]] = $oneQuestionAnswer[1];
    }
    return $oneGame;
}

function getResultGames(string $nameGame)
{
    $nameUser = askUserName($nameGame);
    $questionAnswer = getQuestionAnswer($nameGame);
    $resultGame = checkTerms($questionAnswer, $nameUser);
}
