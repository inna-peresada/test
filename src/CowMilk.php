<?php

namespace src;
class CowMilk extends Milk
{
    private float $fatPercentage;

    public function getFatPercentage(): float
    {
        return $this->fatPercentage;
    }

    public function setFatPercentage(float $fatPercentage): void
    {
        $this->fatPercentage = $fatPercentage;
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
        if ($this->getFatPercentage() == 2.5) {
            return $this->getPriceForUnit() * $this->getVolume() - ($this->getPriceForUnit() * $this->getVolume() * $this->getDiscount());
        } else return $this->getPriceForUnit() * $this->getVolume();
    }

    public function getVatAmount(): float
    {
        return $this->getVat() * $this->finalPrice();
    }


}