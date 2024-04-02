<?php

namespace src;
class SoyMilk extends Milk
{
    private string $flavour;

    public function getFlavour(): string
    {
        return $this->flavour;
    }

    public function setFlavour(string $flavour): void
    {
        $this->flavour = $flavour;
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
        if ($this->getFlavour() == "vanilla") {
            return $this->getPriceForUnit() * $this->getVolume() - ($this->getPriceForUnit()* $this->getVolume() * $this->getDiscount());
        } else return $this->getPriceForUnit() * $this->getVolume();
    }

    public function getVatAmount(): float
    {
        return $this->getVat() * $this->finalPrice();
    }

}