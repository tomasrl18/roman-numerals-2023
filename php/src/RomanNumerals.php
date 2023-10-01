<?php declare(strict_types=1);

namespace Kata;

class RomanNumerals
{
    public function convertRomanNumeral(int $number): string
    {
        if ($number === 5) {
            return 'V';
        }

        if ($number === 10) {
            return 'X';
        }

        return 'I';
    }
}
