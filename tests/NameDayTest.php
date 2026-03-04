<?php

use JGI\NameDay\NameDay;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;

class NameDayTest extends TestCase
{
    #[DataProvider('namesProvider')]
    public function testReturnCorrectNames(string $date, array $names): void
    {
        $nameDay = new NameDay();
        self::assertEquals($names, $nameDay->getNamesByDate(new \DateTime($date)));
    }

    public static function namesProvider(): array
    {
        return [
            ['2018-08-21', ['Jon', 'Jonna']],
            ['2018-09-09', ['Anita', 'Annette']],
            ['2021-01-19', ['Henrik']],
            ['2022-01-19', ['Henrik', 'Henry']],
            ['2023-01-19', ['Henrik', 'Henry']],
            ['2026-01-24', ['Erika']],
            ['2027-01-24', ['Erika', 'Eira']],
        ];
    }
}
