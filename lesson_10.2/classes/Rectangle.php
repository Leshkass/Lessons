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

        $this->setWidth($width);
        $this->setLength($length);

    }

    public function getLength(): int|float
    {
        return $this->length;
    }

    public function getWidth(): int|float
    {
        return $this->width;
    }

    private function setLength($length): void
    {
        $this->length = $length;
    }

    private function setWidth($width): void
    {
        $this->width = $width;
    }

    public function getPerimeter(): int|float
    {
        return ($this->width * 2) + ($this->length * 2);
    }


    public function area(): void
    {

    }

    public function perimeter(): void
    {

    }
}