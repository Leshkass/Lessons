<?php

class Rectangle extends Figure
{
    private int|float $width;

    private int|float $length;

    public function __construct(int|float $width, int|float $length)
    {
        if($width <= 0) {
            throw new Exception('Invalid width');

        } elseif ($length <= 0) {
            throw new Exception('Invalid length');
        }

        $this->width = $width;
        $this->length = $length;

    }

    public function getLength(): int|float
    {
        return $this->length;
    }

    public function getWidth(): int|float
    {
        return $this->width;
    }


    public function area(): int|float
    {
        return round($this->length * $this->width,2);
    }

    public function perimeter(): int|float
    {
        return round(($this->width * 2) + ($this->length * 2),2);
    }
}