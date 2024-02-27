<?php

define('PI',3.14);

class Circle extends Figure
{
    private int|float $radius;


    public function __construct(int|float $radius)
    {
        if($radius <= 1){
            throw new Exception('Invalid radius');
        }

        $this->setRadius($radius);
    }

    public function getRadius(): int|float
    {
        return $this->radius;
    }

    private function setRadius(float|int $radius): void
    {
        $this->radius = $radius;
    }

    public function getArea(): int|float
    {
        return PI * $this->radius** 2;
    }

    public function area(): void
    {

    }

    public function perimeter(): void
    {

    }
}