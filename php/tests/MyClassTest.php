<?php declare(strict_types=1);

namespace KataTests;

use Kata\RomanNumerals;
use PHPUnit\Framework\TestCase;

class MyClassTest extends TestCase
{
    /** @test */
    public function given_1_then_return_I(): void
    {
        $xxx = new RomanNumerals();

        $result = $xxx->convertRomanNumeral(1);

        self::assertEquals('I', $result);
    }

    /** @test */
    public function given_5_then_return_V(): void
    {
        $xxx = new RomanNumerals();

        $result = $xxx->convertRomanNumeral(5);

        self::assertEquals('V', $result);
    }

    /** @test */
    public function given_10_then_return_X(): void
    {
        $xxx = new RomanNumerals();

        $result = $xxx->convertRomanNumeral(10);

        self::assertEquals('X', $result);
    }
}
