<?php

namespace LaravelMyanmarTools\Nrc;

use LaravelMyanmarTools\Nrc\Concerns\CanCheckNrc;
use LaravelMyanmarTools\Nrc\Concerns\CanNormalize;
use Spatie\Macroable\Macroable;

class Nrc
{
    use CanCheckNrc,
        CanNormalize,
        Macroable;
}
