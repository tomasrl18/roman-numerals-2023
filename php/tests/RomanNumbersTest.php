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
            'given_6_then_return_VI' => [6, 'VI'],
            'given_8_then_return_VIII' => [8, 'VIII'],
            'given_9_then_return_IX' => [9, 'IX'],
            'given_10_then_return_X' => [10, 'X'],
            'given_13_then_return_XIII' => [13, 'XIII'],
            'given_14_then_return_XIV' => [14, 'XIV'],
            'given_15_then_return_XV' => [15, 'XV'],
            'given_18_then_return_XVIII' => [18, 'XVIII'],
            'given_19_then_return_XIV' => [19, 'XIV'],
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
