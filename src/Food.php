<?php

namespace src;

abstract class Food
{
    private float $vat = 0;
    private int $priceForUnit = 0;

    public function setVat(float $vat):void
    {
        $this->vat = $vat;
    }
    public function getVat():float
    {
        return $this->vat;
    }

    public function setPriceForUnit(int $price):void
    {
        $this->priceForUnit = $price;
    }
    public function getPriceForUnit():int
    {
        return $this->priceForUnit;
    }

    abstract public function powPrice(): int;
}