<?php

class Circle extends Figure
{
    private int|float $radius;


    public function __construct(int|float $radius)
    {
        if($radius <= 1){
            throw new Exception('Invalid radius');
        }

        $this->radius = $radius;
    }

    public function getRadius(): int|float
    {
        return $this->radius;
    }


    public function area(): int|float
    {
        return round(pi() * $this->radius** 2,2);
    }

    public function perimeter(): int|float
    {
        return round(2 * pi() * $this->radius,2);
    }
}