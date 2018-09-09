<?php

use PHPUnit\Framework\TestCase;
use JGI\NameDay\NameDay;

class NameDayTest extends TestCase
{
    /**
     * @test
     * @dataProvider namesProvider
     */
    public function returnCorrectNames(string $date, array $names): void
    {
        $nameDay = new NameDay();
        $this->assertEquals($names, $nameDay->getNamesByDate(new \DateTime($date)));
    }

    public function namesProvider(): array
    {
        return [
            ['2018-08-21', ['Jon', 'Jonna']],
            ['2018-09-09', ['Anita', 'Annette']],
        ];
    }
}
