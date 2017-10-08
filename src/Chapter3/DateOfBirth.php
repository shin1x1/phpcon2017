<?php
declare(strict_types=1);

namespace Acme\Chapter3;

use Cake\Chronos\Date;

final class DateOfBirth
{
    /** @var  Date */
    private $value;

    /**
     * @param Date $value
     */
    private function __construct(Date $value)
    {
        $this->value = $value;
    }

    /**
     * @return int
     */
    public function age(): int
    {
        return $this->value->age;
    }

    /**
     * @param Date $date
     * @return DateOfBirth
     */
    public static function of(Date $date): self
    {
        return new self($date);
    }

    /**
     * @param string $text
     * @return DateOfBirth
     */
    public static function ofByText(string $text): self
    {
        return new self(new Date($text));
    }
}