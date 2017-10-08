<?php
declare(strict_types=1);

namespace Acme\Chapter2\Domain;

use Acme\Exception\InvariantException;

final class TaxRate
{
    /** @var  float */
    private $value;

    /**
     * @param float $value
     * @throws InvariantException
     */
    private function __construct(float $value)
    {
        if (!($value < 1)) {
            throw new InvariantException('Invalid taxRate:' . $value);
        }
        $this->value = $value;
    }

    /**
     * @return float
     */
    public function asFloat(): float
    {
        return $this->value;
    }

    /**
     * @param float $value
     * @return TaxRate
     */
    public static function of(float $value): self
    {
        return new self($value);
    }

    /**
     * @param int $value
     * @return TaxRate
     */
    public static function ofByInt(int $value): self
    {
        return new self($value / 100);
    }
}
