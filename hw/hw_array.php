<?php

$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];

$arrLength = count($arr);
echo "Длина массива: " . $arrLength . "<br>";



$sum = $arr[3] + $arr[4] + $arr[5];
echo "Сумма 4го, 5го и 6го элементов: " . $sum . "<br>";



foreach ($arr as $key => $value) {
    if ($key <= 3) {
        $firstElement = array_shift($arr);
        array_push($arr, $firstElement);
    }
}
echo "Первые 4 элемента массива переместили в конец массива: " . "<br>";
var_dump($arr);
echo "<br>";


$firstArr = [
    'one' => 1,
    'two' => 2,
    'three' => 3,
    'four' => 5,
    'five' => 12,
];

$secondArr = [
    'one' => 1,
    'seven' => 22,
    'three' => 32,
    'four' => 5,
    'five' => 13,
    'six' => 37,
];

$result1 = array_diff($secondArr, $firstArr);
echo "Элементы, которые отсутствуют в первом массиве и присутствуют во втором: ";
echo "<pre>";
var_dump($result1);
echo "</pre>";

$result2 = array_diff($firstArr, $secondArr);
echo "Элементы, которые присутствуют в первом массиве и отсутствуют во втором: ";
echo "<pre>";
    var_dump($result2);
echo "</pre>";

$result = array_intersect($firstArr, $secondArr);
echo "Все элементы, значения которых совпадают: ";
echo "<pre>";
    var_dump($result);
echo "</pre>";


$result1 = array_values($result1);
$result2 = array_values($result2);
$result = array_merge($result1, $result2);
echo "Все элементы, значения которых отличаются: ";
echo "<pre>";
    var_dump($result);
echo "</pre>";



$firstArr = [
    'one' => 1,
    'two' => [
        'one' => 1,
        'seven' => 22,
        'three' => 32,
    ],
    'three' => [
        'one' => 1,
        'two' => 2,
    ],
    'four' => 5,
    'five' => [
        'three' => 32,
        'four' => 5,
        'five' => 12,
    ],
];


$result = [];
foreach($firstArr as $row) {
    if (is_array($row)) {
        $row = array_values($row);
        $result[] = $row[1];
    }
}
$secondElements = implode(", ", $result );
echo "Все вторые элементы вложенных массивов: " . $secondElements . "<br>";

echo "Oбщее количество элементов в массиве: ";
echo (count($firstArr, mode: 1)) . "<br>";


$resultArr = [];
foreach ($firstArr as $row) {
    if (!is_array($row)) {
        $resultArr[] = $row;
    } else {
        foreach ($row as $value) {
            $resultArr[] = $value;
        }
    }
}

$sum = array_sum($resultArr);
echo "Сумма всех значений в массиве: " . $sum;
