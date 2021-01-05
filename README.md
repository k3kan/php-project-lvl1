![check-linter](https://github.com/k3kan/php-project-lvl1/workflows/check-linter/badge.svg)

<a href="https://codeclimate.com/github/k3kan/php-project-lvl1/maintainability"><img src="https://api.codeclimate.com/v1/badges/5b0c2148ed530abb9d2f/maintainability" /></a>
# Добро пожаловать!!

Проект представляет собой пять мини-игр, которые пользователь может выбрать. Чтобы успешно пройти игру, требуется верно ответить на 3 вопроса.
Список мини-игр:
* brain-calc - необходимо верно вычислить выражение;
* brain-even - необходимо ответить "да", если число четно и "нет", если нечетное;
* brain-progression - необходимо написать число, которое пропущено в последовательности;
* brain-gcd - необходимо найти общий делитель двух чисел, представленных на экране;
* brain-prime - необходимо ответить "да", если число простое(т.е делится только на само себя и единицу) и "нет", если составное(т.е имеет делители помимо 1 и своего числа).

Для установки проекта требуется выполнить следующие команды:
* composer global require k3kan/test-package
* composer global config bin-dir --absolute (смотрим пусть установки composer)
* echo $PATH (есть ли путь до composer, если нет, то выполняем команду ниже)
* PATH=$PATH:/home/user/.config/composer/vendor/bin (указывайте **Ваш** путь установки composer!)
    * export PATH
* brain-calc (запускаем игру)

Install brain games


<a href="https://asciinema.org/a/7A8uwykW6ezDRTjDBfeOPajqk" target="_blank"><img src="https://asciinema.org/a/7A8uwykW6ezDRTjDBfeOPajqk.svg" /></a>


Brain even (parity check correct) 

<a href="https://asciinema.org/a/6Y1lRs88Ktm5aztryZrW5h7xx" target="_blank"><img src="https://asciinema.org/a/6Y1lRs88Ktm5aztryZrW5h7xx.svg" /></a>

Brain even (parity check incorrect)

<a href="https://asciinema.org/a/tOvHX53CfLIl4WlreGUKEXMmY" target="_blank"><img src="https://asciinema.org/a/tOvHX53CfLIl4WlreGUKEXMmY.svg" /></a>

Brain-calc (Correct answers)

<a href="https://asciinema.org/a/Em8kFU7pj832SXoeHDaEvslQi" target="_blank"><img src="https://asciinema.org/a/Em8kFU7pj832SXoeHDaEvslQi.svg" /></a>

Brain-calc (Incorrect answers)

<a href="https://asciinema.org/a/0qtB62SgVnYC15gWFcnuNGd8G" target="_blank"><img src="https://asciinema.org/a/0qtB62SgVnYC15gWFcnuNGd8G.svg" /></a>

Brain-prime.
Answer "yes" if given number is prime. Otherwise answer "no".
Correct answers

<a href="https://asciinema.org/a/J80732Du8oWWt0XZdNnqvtRme" target="_blank"><img src="https://asciinema.org/a/J80732Du8oWWt0XZdNnqvtRme.svg" /></a>

Incorrect answers

<a href="https://asciinema.org/a/IOINmJLW6AANELBOvZws0vFFQ" target="_blank"><img src="https://asciinema.org/a/IOINmJLW6AANELBOvZws0vFFQ.svg" /></a>

Brain-gcd.
Find the greatest common divisor of given numbers.
Correct answers.

<a href="https://asciinema.org/a/iOQPZovnhwzbwqolP6cMyryNc" target="_blank"><img src="https://asciinema.org/a/iOQPZovnhwzbwqolP6cMyryNc.svg" /></a>

Incorrect answers


<a href="https://asciinema.org/a/4rnDDY7FLcAdVVrOQDWaXAyf1" target="_blank"><img src="https://asciinema.org/a/4rnDDY7FLcAdVVrOQDWaXAyf1.svg" /></a>



Brain-progression.
What number is missing in the progression?
Correct answers.

<a href="https://asciinema.org/a/Hz65Fpy4LUQYWmiVMkr1Jq0ds" target="_blank"><img src="https://asciinema.org/a/Hz65Fpy4LUQYWmiVMkr1Jq0ds.svg" /></a>

Incorrect answers

<a href="https://asciinema.org/a/sZBw41FvjBfqkidvxTpnOcuPR" target="_blank"><img src="https://asciinema.org/a/sZBw41FvjBfqkidvxTpnOcuPR.svg" /></a>



