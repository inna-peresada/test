<?php

namespace src;
class Chocolate extends Food
{
    private int $bar = 0;

    public function setNumberOfBars(int $bar): void
    {
        $this->bar = $bar;
    }

    public function getNumberOfBars(): int
    {
        return $this->bar;
    }

    public function powPrice():int
    {
        return pow($this->getPriceForUnit() * $this->getNumberOfBars(), 2);
    }

}