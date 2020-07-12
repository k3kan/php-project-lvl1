![check-linter](https://github.com/k3kan/php-project-lvl1/workflows/check-linter/badge.svg)

<a href="https://codeclimate.com/github/k3kan/php-project-lvl1/maintainability"><img src="https://api.codeclimate.com/v1/badges/5b0c2148ed530abb9d2f/maintainability" /></a>
# Добро пожаловать!

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


<a href="https://asciinema.org/a/xw8QsC3O59zUF56xYlpbBNOi4" target="_blank"><img src="https://asciinema.org/a/xw8QsC3O59zUF56xYlpbBNOi4.svg" /></a>


Brain even (parity check correct) 

<a href="https://asciinema.org/a/9KraqZzT0wZGJY5LxPkwbfd0Q" target="_blank"><img src="https://asciinema.org/a/9KraqZzT0wZGJY5LxPkwbfd0Q.svg" /></a>

Brain even (parity check incorrect)

<a href="https://asciinema.org/a/SDoOZeVibABauStRZhkv4k2Ji" target="_blank"><img src="https://asciinema.org/a/SDoOZeVibABauStRZhkv4k2Ji.svg" /></a>

Brain-calc (Correct answers)

<a href="https://asciinema.org/a/3vsQ3ELODzvBn7cg03M2FvY7n" target="_blank"><img src="https://asciinema.org/a/3vsQ3ELODzvBn7cg03M2FvY7n.svg" /></a>

Brain-calc (Incorrect answers)

<a href="https://asciinema.org/a/wTOGTaHE9qNXLJCU9yXbGZk2o" target="_blank"><img src="https://asciinema.org/a/wTOGTaHE9qNXLJCU9yXbGZk2o.svg" /></a>

Brain-prime.
Answer "yes" if given number is prime. Otherwise answer "no".
Correct answers

<a href="https://asciinema.org/a/ftyBnppjTnpfc0tEEEo0oD6HY" target="_blank"><img src="https://asciinema.org/a/ftyBnppjTnpfc0tEEEo0oD6HY.svg" /></a>

Incorrect answers


<a href="https://asciinema.org/a/CK8EmGRhqjRymFjdiciojdznv" target="_blank"><img src="https://asciinema.org/a/CK8EmGRhqjRymFjdiciojdznv.svg" /></a>


Brain-gcd.
Find the greatest common divisor of given numbers.
Correct answers.

<a href="https://asciinema.org/a/8IbghQrkHaGCFh0N88K472hdW" target="_blank"><img src="https://asciinema.org/a/8IbghQrkHaGCFh0N88K472hdW.svg" /></a>

Incorrect answers


<a href="https://asciinema.org/a/DbfqvBieD0td1QsAZTeGEysOI" target="_blank"><img src="https://asciinema.org/a/DbfqvBieD0td1QsAZTeGEysOI.svg" /></a>



Brain-progression.
What number is missing in the progression?
Correct answers.

<a href="https://asciinema.org/a/vPcA9P0LYcbdjEp5NNxa8eMk5" target="_blank"><img src="https://asciinema.org/a/vPcA9P0LYcbdjEp5NNxa8eMk5.svg" /></a>


Incorrect answers

<a href="https://asciinema.org/a/OmMVM9tq4ldQ2zSevefRMfIOw" target="_blank"><img src="https://asciinema.org/a/OmMVM9tq4ldQ2zSevefRMfIOw.svg" /></a>



