<?php declare(strict_types=1);

namespace KataTests;

use Kata\RomanNumerals;
use PHPUnit\Framework\TestCase;

class RomanNumbersTest extends TestCase
{
    public function convertion() {
        return [
            'given_1_then_return_I' => [1, 'I'],
            'given_2_then_return_II' => [2, 'II'],
            'given_3_then_return_III' => [3, 'III'],
            'given_4_then_return_IV' => [4, 'IV'],
            'given_5_then_return_V' => [5, 'V'],
        ];
    }

    /** @test
     * @dataProvider convertion
     */
    public function given_a_decimal_number_then_return_its_equal_in_roman_number($number, $expected): void
    {
        $romanNumeral = new RomanNumerals();

        $result = $romanNumeral->convert($number);

        self::assertEquals($expected, $result);
    }
}
