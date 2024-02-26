<?php

class SomeTextHeir extends SomeText
{
    public function printUpper(): string
    {
        return strtoupper(parent::print());
    }

}