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

        if ($number === 50) {
            return 'L';
        }

        if ($number === 100) {
            return 'C';
        }

        return 'I';
    }
}
