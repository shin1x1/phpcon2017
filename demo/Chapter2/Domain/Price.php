<?php
declare(strict_types=1);

namespace Demo\Chapter2\Domain;

final class Price
{
    /** @var  int */
    private $value;

    /**
     * @param int $value
     */
    public function __construct(int $value)
    {
        $this->value = $value;
    }

    /**
     * @return int
     */
    public function asInt(): int
    {
        return $this->value;
    }
}








