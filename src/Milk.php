<?php

namespace src;
class Milk extends Food
{
    private int $volume = 0;

    public function setVolume(int $volume):void
    {
        $this->volume = $volume;
    }
    public function getVolume():int
    {
        return $this->volume;
    }

    public function powPrice():int
    {
        return pow($this->getPriceForUnit() * $this->getVolume(), 2);
    }
}