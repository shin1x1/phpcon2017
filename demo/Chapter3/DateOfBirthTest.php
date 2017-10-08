<?php
declare(strict_types=1);

namespace Demo\Chapter3;

use Cake\Chronos\Date;
use PHPUnit\Framework\TestCase;

class DateOfBirthTest extends TestCase
{
    protected function setUp()
    {
        parent::setUp();

        Date::setTestNow(new Date('2017-10-08'));
    }

    /**
     * @test
     */
    public function age()
    {
        $actual = new DateOfBirth('2000-10-08');

        $this->assertSame(17, $actual->age());
    }

}