<?php
declare(strict_types=1);

namespace Acme\Chapter2;

use Acme\Chapter2\Domain\Price;
use Acme\Chapter2\Domain\PriceWithTax;
use Acme\Chapter2\Domain\TaxRate;

final class PriceWithTaxCalculator
{
    public static function calculate(Price $price, TaxRate $taxRate): PriceWithTax
    {
        return PriceWithTax::of($price, $taxRate);
    }
}