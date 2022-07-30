<?php

namespace DevNullIr\LaravelFaker;

use DevNullIr\LaravelFaker\core\traits\address;
use DevNullIr\LaravelFaker\core\traits\name as MakerName;
use DevNullIr\LaravelFaker\core\traits\number;
use DevNullIr\LaravelFaker\core\traits\Strings;
use DevNullIr\LaravelFaker\core\traits\UserAgent;

class LaravelFaker
{
    use MakerName, address, number, Strings, UserAgent;

    public function __get(string $name)
    {
        return $this->$name();
    }

    public function Create(): object
    {
        return new LaravelFaker();
    }
}
