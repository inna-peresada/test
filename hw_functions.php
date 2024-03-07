<?php
//Создать функцию, принимающую массив произвольной вложенности и определяющий любой элемент номер которого передан параметром во всех вложенных массивах.

$arr = [5, 73, 15, 67, 'orange', [5,7,9], [2, [1, 3, 5]], 1];

function getArrayElements(array $arr, int $i) {
    $elements = [];
    if (isset($arr[$i]) && !is_array($arr[$i])) {
        $elements[] = $arr[$i];
    }
    foreach($arr as $value) {
        if (is_array($value)) {
            $elements = array_merge($elements, getArrayElements($value, $i));
        }
    }
    return $elements;
}

$elements = getArrayElements($arr, 1);
print_r ($elements);
echo "<br>";


//Создать функцию которая считает все буквы b в переданной строке, в случае если передается не строка функция должна возвращать false

function countLetters($text) {
    if (!is_string($text)) {
        return false;
    }
    $numberOfLetters = substr_count($text, "b");
        return $numberOfLetters;
}

$text = "BBC is the British broadcasting corporation"; // case-sensitive
$numberOfLetters = countLetters($text);
echo $numberOfLetters . "<br>";



//Создать функцию которая считает сумму значений всех элементов массива произвольной глубины

$arr = [5, 73, 15, [5,7,9], [2, [1, 3, 5]], 1];
function sumArray(array $arr) {
    $sum = 0;
    foreach ($arr as $row) {
        if (is_array($row)) {
                $sum += sumArray($row);
        } else {
            $sum += $row;
        }
    }
    return $sum;
}

$sum = sumArray($arr);
echo $sum . "<br>";

//Создать функцию, которая определит сколько квадратов меньшего размера можно вписать в квадрат большего размера, размер возвращать в float

function squares(int $a, $b):float {
    if(pow($a, 2) > pow($b, 2)) {
        $result = floor($a/$b);
        return (float) pow($result, 2);

    }
}

$result = squares(9,2);
var_dump($result);