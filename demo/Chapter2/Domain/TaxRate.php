<?php
declare(strict_types=1);

namespace Demo\Chapter2\Domain;

use Demo\Exception\InvariantException;

final class TaxRate
{
    /** @var  float */
    private $value;

    /**
     * @param float $value
     * @throws InvariantException
     */
    public function __construct(float $value)
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
}



