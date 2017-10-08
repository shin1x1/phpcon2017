<?php
declare(strict_types=1);

namespace Demo\Chapter3;

use Cake\Chronos\Date;

final class DateOfBirth extends Date
{
    /**
     * @return int
     */
    public function age(): int
    {
        return $this->age;
    }
}