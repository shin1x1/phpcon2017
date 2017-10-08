<?php
declare(strict_types=1);

namespace Acme\Chapter2\Domain;

final class PriceWithTax
{
    /** @var  Price */
    private $price;

    /** @var  TaxRate */
    private $taxRate;

    /**
     * @param Price $price
     * @param TaxRate $taxRate
     */
    private function __construct(Price $price, TaxRate $taxRate)
    {
        $this->price = $price;
        $this->taxRate = $taxRate;
    }

    /**
     * @return int
     */
    public function asInt(): int
    {
        return intval($this->price->asInt() * (1 + $this->taxRate->asFloat()));
    }

    /**
     * @param Price $price
     * @param TaxRate $taxRate
     * @return PriceWithTax
     */
    public static function of(Price $price, TaxRate $taxRate): self
    {
        return new self($price, $taxRate);
    }
}
