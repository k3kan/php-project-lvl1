<?php

namespace BrainGames\Games\Even;

use function cli\line;
use function cli\prompt;

function random()
{
    return rand(1, 100);
}


function PatiryCheck()
{
    line('Answer "yes" if the number is even, otherwise answer "no".');
    global $name;
    $count = 0;
    while ($count !== 3) {
        $rand = random();
        line("Question: %s", $rand);
        $number = prompt('You answer');
        $rand % 2 === 0 ? $answer = 'yes' : $answer = 'no';
        if ($number === $answer) {
            line("Correct");
            $count++;
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $number, $answer);
            line("Let's try again, %s!", $name);
            break;
        }
    }
    if ($count === 3) {
        line("Congratulation, %s!", $name);
    }
}
