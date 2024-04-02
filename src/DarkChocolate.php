<?php

namespace src;

class DarkChocolate extends Chocolate
{
    private int $cacaoPercentage;
    public function setPercentage(int $cacaoPercentage):void
    {
        $this->cacaoPercentage = $cacaoPercentage;
    }
    public function getPercentage():int
    {
        return $this->cacaoPercentage;
    }

    private float $discount = 0;

    public function setDiscount(float $discount): void
    {
        $this->discount = $discount;
    }
    public function getDiscount(): float
    {
        return $this->discount;
    }

    public function finalPrice(): float
    {
        if ($this->getPercentage() == 100) {
            return $this->getPriceForUnit() * $this->getNumberOfBars() - ($this->getPriceForUnit() * $this->getNumberOfBars() * $this->getDiscount());
        } else return $this->getPriceForUnit() * $this->getNumberOfBars();
    }

    public function getVatAmount(): float
    {
        return $this->getVat() * $this->finalPrice();
    }

}