<?php

namespace LaravelMyanmarTools\Nrc\Concerns;

use LaravelMyanmarTools\Nrc\Services\NrcPrefixService;

trait CanCheckNrc
{
	public function isNrc(string $nrc): bool
	{
		return (new NrcPrefixService($nrc))->isNrc();
	}
}
