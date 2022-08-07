<?php
//Задание 2
//Разработайте функцию с объявленными типами аргументов и возвращаемого значения, принимающую в качестве аргумента массив целых чисел.
// Результатом работы функции должен быть массив, содержащий три элемента: max — наибольшее число, min — наименьшее число,
// avg — среднее арифметическое всех чисел массива;

/**
 * @param array $intArray
 * @return array
 */
function arhimed (array $intArray): array
{
    $result['max'] = max($intArray);
    $result['min'] = min($intArray);
    $result['avg'] = array_sum($intArray) / count($intArray);
    return $result;
}


//Блок тестирования

$size = readline("Введите размерность массивов: ");
$arrayA = [];
for ($i = 0; $i < $size; $i++)
{
    $arrayA[] = rand(0, 100);
}

print_r($arrayA);
print_r(arhimed($arrayA));