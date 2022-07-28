<?php

use DevNullIr\LaravelFaker\core\Facade\LaravelFaker as LaravelFaker;

if (! function_exists("faker")){
    function faker(){
        return app()->make(LaravelFaker::class);
    }
}
