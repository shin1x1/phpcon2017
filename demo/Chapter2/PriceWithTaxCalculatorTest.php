<?php
declare(strict_types=1);

namespace Demo\Chapter2;

use PHPUnit\Framework\TestCase;

class PriceWithTaxCalculatorTest extends TestCase
{
    /**
     * @test
     */
    public function calculate()
    {
        $price = 100;
        $taxRate = 0.08;
        $actual = PriceWithTaxCalculator::calculate($price, $taxRate);

        $this->assertSame(108, $actual);
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
     */
//    public function calculate_商品価格に税込価格入れている()
//    {
//        $price = new Price(100);
//        $taxRate = new TaxRate(0.08);
//        $price = PriceWithTaxCalculator::calculate($price, $taxRate);
//        // (snip)
//        $actual = PriceWithTaxCalculator::calculate($price, $taxRate);
//
//        $this->assertSame(108, $actual);
//    }

    /**
     * @test
     */
//    public function calculate_消費税率が整数()
//    {
//        $price = new Price(100);
//        $taxRate = new TaxRate(8);
//        $actual = PriceWithTaxCalculator::calculate($price, $taxRate);
//
//        $this->assertSame(108, $actual->asInt());
//    }
}

