<?php
declare(strict_types=1);

namespace Acme\Chapter2;

use Acme\Chapter2\Domain\Price;
use Acme\Chapter2\Domain\TaxRate;
use PHPUnit\Framework\TestCase;

class PriceWithTaxCalculatorTest extends TestCase
{
    /**
     * @test
     */
    public function calculate()
    {
        $actual = PriceWithTaxCalculator::calculate(Price::of(100), TaxRate::of(0.08));

        $this->assertSame(108, $actual->asInt());
    }

    /**
     * @test
     */
//    public function calculate_第一引数が文字列()
//    {
//        Warning::$enabled = false;
//
//        $price = '5e2';
//        $taxRate = 0.08;
//        $actual = PriceWithTaxCalculator::calculate($price, $taxRate);
//
//        var_dump($actual);
//    }

    /**
     * @test
     * @expectedException \TypeError
     */
    public function calculate_商品価格に税込価格入れている()
    {
        $taxRate = TaxRate::ofByInt(8);
        $price = PriceWithTaxCalculator::calculate(Price::of(100), $taxRate);
        // (snip)
        $actual = PriceWithTaxCalculator::calculate($price, $taxRate);

        $this->assertSame(108, $actual);
    }

    /**
     * @test
     * @expectedException
     */
    public function calculate_消費税率が整数()
    {
        $actual = PriceWithTaxCalculator::calculate(Price::of(100), TaxRate::ofByInt(8));

        $this->assertSame(108, $actual->asInt());
    }
}

