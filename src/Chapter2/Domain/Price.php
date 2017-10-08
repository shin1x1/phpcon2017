<?php
declare(strict_types=1);

namespace Acme\Chapter2\Domain;

use Acme\Exception\InvariantException;

final class Price
{
    /** @var  int */
    private $value;

    /**
     * @param int $value
     * @throws InvariantException
     */
    private function __construct(int $value)
    {
        if (!(1 <= $value)) {
            throw new InvariantException('Invalid price:' . $value);
        }
        $this->value = $value;
    }

    /**
     * @return int
     */
    public function asInt(): int
    {
        return $this->value;
    }

    /**
     * @param int $value
     * @return Price
     */
    public static function of(int $value): self
    {
        return new self($value);
    }
}
