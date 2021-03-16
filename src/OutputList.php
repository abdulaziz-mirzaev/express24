<?php

namespace App;

class OutputList
{
    private $number;

    public function __construct(int $number)
    {
        $this->number = $number;
    }

    public function getResult(): array
    {
        $array = $this->parse($this->number);
        return array_reverse($array);
    }

    public function parse($string)
    {
        $array = str_split((string)$string);
        return array_map(function ($element) {
            return (int)$element;
        }, $array);
    }
}