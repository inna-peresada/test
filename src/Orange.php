<?php

namespace src;
final class Orange extends Food
{
    private int $weight;

    public function setWeight(int $weight):void
    {
        $this->weight = $weight;
    }
    public function getWeight():int
    {
        return $this->weight;
    }

    public function powPrice():int
    {
        return pow($this->getPriceForUnit() * $this->getWeight(), 2);
    }

}