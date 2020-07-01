<?php

namespace BrainGames\Src\Calc;

use function cli\line;
use function cli\prompt;

function random()
{
    return rand(1, 100);
}

function Calc()
{
    line('What is the result of the expression?');
    global $name;
    $count = 0;
    while ($count !== 3) {
        $rand1 = random();
        $rand2 = random();
        $result = 0;
        $operation = ['+','-','*'];
        $calculation = $operation[rand(0, 2)];
        line("Question: %s %s %s", $rand1, $calculation, $rand2);
        $number = prompt('You answer');
        if ($calculation === '+') {
            $result = $rand1 + $rand2;
        } elseif ($calculation === '-') {
            $result = $rand1 - $rand2;
        } elseif ($calculation === '*') {
            $result = $rand1 * $rand2;
        }
        if ((int) $number === (int) $result) {
            line("Correct");
            $count++;
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $number, $result);
            line("Let's try again, %s!", $name);
            break;
        }
    }
    if ($count === 3) {
        line("Congratulation, %s!", $name);
    }
}
