<?php

namespace LaravelMyanmarTools\Nrc\Concerns;

use LaravelMyanmarTools\Nrc\Services\NrcPrefixService;

trait CanNormalize
{
    public function normalizeNrc(string $nrc, string $lang = 'en'): string
    {
        return (new NrcPrefixService($nrc))->normalizeNrc($lang);
    }
}
