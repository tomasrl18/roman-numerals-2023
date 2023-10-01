<?php declare(strict_types=1);

namespace KataTests;

use Kata\RomanNumerals;
use PHPUnit\Framework\TestCase;

class MyClassTest extends TestCase
{
    public function convertion() {
        return [
            'given_1_then_return_I' => [1, 'I'],
            'given_2_then_return_II' => [2, 'II'],
            //'given_3_then_return_III' => [3, 'III']
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
