<?php
//Задание 1
$repeatQuastion = true;

do {
    $answer = readline("Как звучит полное имя царя Ивана IV? \n 1. Царь всея Руси Иван Четвертый\n 2. Император Иоанн Четвертый Грозный\n 3. Тит-Смарагд-Иоанн Васильевич Рюрик\n");
    if ($answer == 3) {
        echo ("Это правильный ответ!\n");
        $repeatQuastion = false;
    } elseif ($answer == 1 || $answer == 2) {
        echo ("Это неправильный ответ!\n");
        $repeatQuastion = false;
    } else {
        echo ("Неверный формат ответа! Попытайтесь еще раз!\n");
    }
} while ($repeatQuastion == true);

//Задание 2

$amountTasks = readline("Введите количество задач на сегодня: \n");
$tasks = [];
for ($i = 1; $i <= $amountTasks; $i++) {
    $taskName = readline("Введите название задачи №" . $i . ": \n");
    $tasks[$taskName] = readline("Введите необходимое количество часов для решения задачи: " . $taskName . "\n");
}
echo "\nВаши задачи на сегодня:\n";
$allTime = 0;
foreach ($tasks as $name => $time) {
    echo ("Задача: '" . $name . "' Время на выполнение: " . $time . " час/а/ов\n");
    $allTime += $time;
}
echo ("\nВсего запланированных задач: " . count($tasks) . ". Требуемое время на выполнение: " . $allTime . " час/а/ов. Успехов! =)\n");

//Задание 3

$a = readline("Укажите число: ");

switch ($a){
    case $a % 8 == 1:
        echo "Вы указываете на Большой палец";
        break;
    case $a % 8 == 0 || $a % 8 == 2:
        echo "Вы указываете на Указательный палец";
        break;
    case $a % 8 == 7 || $a % 8 == 3:
        echo "Вы указываете на Средний палец";
        break;
    case $a % 8 == 4 || $a % 8 == 6:
        echo "Вы указываете на Безымянный палец";
        break;
    case $a % 8 == 5:
        echo "Вы указываете на Мизинец";
        break;
}