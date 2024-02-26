<?php

class SomeTextHeir extends SomeText
{
    public function printHeir(): string
    {
        return strtoupper(parent::print());
    }

}