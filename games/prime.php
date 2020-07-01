<?php

namespace BrainGames\Games\Prime;

use function cli\line;
use function cli\prompt;

function random()
{
    return rand(1, 100);
}

function prime()
{
    line('Answer "yes" if given number is prime. Otherwise answer "no"');
    $count = 0;
    global $name;
    while ($count !== 3) {
        $number = random();
        $simple = 0;
        $array_to_10 = [1,3,5,7];
        for ($i = 2; $i < 9; $i++) {
            if ($number % $i === 0) {
                $simple++;
            }
        }
        $simple === 0  || in_array($number, $array_to_10) ? $answer = 'no' : $answer = 'yes';
        line("Question: %s", $number);
        $user_answer = prompt('You answer');
        if ($answer === $user_answer) {
            line('Correct!');
            $count++;
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $user_answer, $answer);
            line("Let's try again, %s!", $name);
            break;
        }
    }
    if ($count === 3) {
        line("Congratulation, %s!", $name);
    }
}
