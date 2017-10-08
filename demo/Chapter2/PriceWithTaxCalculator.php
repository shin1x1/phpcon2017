<?php
declare(strict_types=1);

namespace Demo\Chapter2;

final class PriceWithTaxCalculator
{
    public static function calculate($price, $taxRate)
    {
        return intval($price * (1 + $taxRate));
    }
}