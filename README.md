[![Run tests](https://github.com/Laravel-Myanmar-Tools/nrc/actions/workflows/run-tests.yml/badge.svg?branch=main)](https://github.com/Laravel-Myanmar-Tools/nrc/actions/workflows/run-tests.yml)
[![Packagist Downloads](https://img.shields.io/packagist/dt/Laravel-Myanmar-Tools/nrc)](https://packagist.org/packages/Laravel-Myanmar-Tools/nrc)

# Nrc

PHP Myanmar Nrc for [Laravel Myanmar Tools](https://laravel-myanmar-tools.com)

## Installation

```bash
composer require laravel-myanmar-tools/nrc
```

## Usage

### Check Nrc

```php
use LaravelMyanmarTools\Nrc\Nrc;

$nrc = new Nrc;

$nrc->isNrc('12/OUKAMA(N)123456'); // return true

$nrc->isNrc('12/OuKaMa(Naing)123456'); // return true

$nrc->isNrc('၁၂/ဥကမ(နိုင်)၁၂၃၄၅၆'); // return true
```

### Normalize Nrc

```php
use LaravelMyanmarTools\Nrc\Nrc;

$nrc = new Nrc;

$nrc->normalizeNrc('12/OUKAMA(N)123456'); // return "12/OUKAMA(N)123456"
$nrc->normalizeNrc('12/OUKAMA(N)123456', 'mm'); // return "၁၂/ဥကမ(နိုင်)၁၂၃၄၅၆"

$nrc->normalizeNrc('12/OuKaMa(Naing)123456'); // return "12/OUKAMA(N)123456"
$nrc->normalizeNrc('12/OuKaMa(Naing)123456', 'mm'); // return "၁၂/ဥကမ(နိုင်)၁၂၃၄၅၆"

$nrc->normalizeNrc('၁၂/ဥကမ(နိုင်)၁၂၃၄၅၆'); // return "12/OUKAMA(N)123456"
$nrc->normalizeNrc('၁၂/ဥကမ(နိုင်)၁၂၃၄၅၆', 'mm'); // return "၁၂/ဥကမ(နိုင်)၁၂၃၄၅၆"
```

## Customize

```php
use LaravelMyanmarTools\Nrc\Nrc;
use Illuminate\Support\Str;

$nrc = new Nrc;

$nrc::macro('isYangon', function(string $nrc) {
   return Str::before($nrc, '/') == '12';
});

$nrc->isYangon('12/OuKaMa(Naing)123456'); // return true
```

## Testing

```bash
composer test
```

## Credit

- [NRCPrefix](https://github.com/libstdmmr/NRCPrefix)
