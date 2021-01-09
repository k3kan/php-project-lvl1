<?php

namespace Brain\Src\Cli;

use function cli\prompt;
use function cli\line;

function askedName()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
}
