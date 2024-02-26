<?php

class SomeTextHeir extends SomeText
{
    public function print(): string
    {
        return strtoupper($this->text);
    }

}