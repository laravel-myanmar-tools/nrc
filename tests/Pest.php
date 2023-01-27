<?php

use LaravelMyanmarTools\Nrc\Nrc;

expect()->extend('toBeNrc', function () {
	expect(nrc()->isNrc($this->value))->toBeTrue();
});

function nrc()
{
	return new Nrc;
}
