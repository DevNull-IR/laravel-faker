<?php

namespace DevNullIr\LaravelFaker;

use DevNullIr\LaravelFaker\core\traits\address;
use DevNullIr\LaravelFaker\core\traits\name as MakerName;
use DevNullIr\LaravelFaker\core\traits\number;
use DevNullIr\LaravelFaker\core\traits\Strings;

class LaravelFaker
{
    use MakerName, address, number, Strings;

    public function Create(): object
    {
        return new LaravelFaker();
    }
}
