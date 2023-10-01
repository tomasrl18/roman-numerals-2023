<?php declare(strict_types=1);

namespace KataTests;

use Kata\RomanNumerals;
use PHPUnit\Framework\TestCase;

class MyClassTest extends TestCase
{
    public function convertion() {
        return [
            'given_1_then_return_I' => [1, 'I'],
            'given_5_then_return_V' => [5, 'V'],
            'given_10_then_return_X' => [10, 'X'],
            'given_50_then_return_L' => [50, 'L'],
            'given_100_then_return_C' => [100, 'C'],
            'given_500_then_return_D' => [500, 'D'],
            'given_1000_then_return_M' => [1000, 'M']
        ];
    }

    /** @test
     * @dataProvider convertion
     */
    public function given_a_number_then_return_its_equal_in_roman($number, $expected): void
    {
        $xxx = new RomanNumerals();

        $result = $xxx->convertRomanNumeral($number);

        self::assertEquals($expected, $result);
    }
}
