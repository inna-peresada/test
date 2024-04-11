<?php

require "../vendor/autoload.php";

use src\CowMilk;
use src\DarkChocolate;
use src\FlavouredChocolate;
use src\Food;
use src\Orange;
use src\Milk;
use src\Chocolate;
use src\SoyMilk;

// наследники первого уровня
$milk = new Milk;
$milk->setPriceForUnit(1);
$milk->setVolume(2);
echo "Стоимость молока в квадрате: ";
var_dump($milk->powPrice());
echo "<br>";


$chocolate = new Chocolate;
$chocolate->setPriceForUnit(7);
$chocolate->setNumberOfBars(5);
echo "Стоимость шоколада в квадрате: ";
var_dump($chocolate->powPrice());
echo "<br>";

$orange = new Orange;
$orange->setPriceForUnit(2);
$orange->setWeight(3);
echo "Стоимость апельсинов в квадрате: ";
var_dump($orange->powPrice());
echo "<br>";

//наследники второго уровня

$darkChocolate100 = new DarkChocolate;
$darkChocolate72 = new DarkChocolate;
$darkChocolate100->setPriceForUnit(8);
$darkChocolate72->setPriceForUnit(8);
$darkChocolate100->setNumberOfBars(2);
$darkChocolate72->setNumberOfBars(2);
$darkChocolate100->setPercentage(100);
$darkChocolate72->setPercentage(72);
$darkChocolate100->setDiscount(0.2);
$darkChocolate100->setVat(0.2);
$darkChocolate72->setVat(0.2);
echo "Итоговая стоимость черного шоколода 100-процентного: ";
var_dump($darkChocolate100->finalPrice());
echo "<br>";
echo "Итоговая стоимость черного шоколода 72-процентного: ";
var_dump($darkChocolate72->finalPrice());
echo "<br>";
echo "Налоги на добавленную стоимость: ";
echo $darkChocolate100->getVatAmount() . ", " . $darkChocolate72->getVatAmount() . "<br>";

$flavouredChocolateVan = new FlavouredChocolate;
$flavouredChocolateStr = new FlavouredChocolate;
$flavouredChocolateVan->setPriceForUnit(7);
$flavouredChocolateStr->setPriceForUnit(7);
$flavouredChocolateVan->setNumberOfBars(3);
$flavouredChocolateStr->setNumberOfBars(3);
$flavouredChocolateVan->setFlavour("vanilla");
$flavouredChocolateStr->setFlavour("strawberry");
$flavouredChocolateStr->setDiscount(0.1);
$flavouredChocolateVan->setVat(0.2);
$flavouredChocolateStr->setVat(0.2);
echo "Итоговая стоимость ванильного шоколода: ";
var_dump($flavouredChocolateVan->finalPrice());
echo "<br>";
echo "Итоговая стоимость клубничного шоколода: ";
var_dump($flavouredChocolateStr->finalPrice());
echo "<br>";
echo "Налоги на добавленную стоимость: ";
echo $flavouredChocolateVan->getVatAmount() . ", " . $flavouredChocolateStr->getVatAmount() . "<br>";

$cowMilk32 = new CowMilk;
$cowMilk25 = new CowMilk;
$cowMilk32->setPriceForUnit(3);
$cowMilk25->setPriceForUnit(3);
$cowMilk32->setVolume(4);
$cowMilk25->setVolume(4);
$cowMilk32->setFatPercentage(3.2);
$cowMilk25->setFatPercentage(2.5);
$cowMilk25->setDiscount(0.25);
$cowMilk32->setVat(0.2);
$cowMilk25->setVat(0.2);
echo "Итоговая стоимость молока 3,2: ";
var_dump($cowMilk32->finalPrice());
echo "<br>";
echo "Итоговая стоимость молока 2,5: ";
var_dump($cowMilk25->finalPrice());
echo "<br>";
echo "Налоги на добавленную стоимость: ";
echo $cowMilk32->getVatAmount() . ", " . $cowMilk25->getVatAmount() . "<br>";

$soyMilkVanilla = new SoyMilk;
$soyMilkBanana = new SoyMilk;
$soyMilkVanilla->setPriceForUnit(5);
$soyMilkBanana->setPriceForUnit(5);
$soyMilkVanilla->setVolume(2);
$soyMilkBanana->setVolume(2);
$soyMilkVanilla->setFlavour('vanilla');
$soyMilkBanana->setFlavour('banana');
$soyMilkVanilla->setDiscount(0.2);
$soyMilkBanana->setVat(0.2);
$soyMilkVanilla->setVat(0.2);
echo "Итоговая стоимость ванильного соевого молока: ";
var_dump($soyMilkVanilla->finalPrice());
echo "<br>";
echo "Итоговая стоимость бананового соевого молока: ";
var_dump($soyMilkBanana->finalPrice());
echo "<br>";
echo "Налоги на добавленную стоимость: ";
echo $soyMilkVanilla->getVatAmount() . ", " . $soyMilkBanana->getVatAmount() . "<br>";

