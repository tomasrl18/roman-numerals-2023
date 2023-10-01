<?php declare(strict_types=1);

namespace Kata;

class RomanNumerals
{
    public function convertRomanNumeral(int $number): string
    {
        $roman = "";

        if ($number >= 10) {
            $roman .= 'X';
            $number -= 10;
        }

        if ($number >= 5) {
            $roman .= 'V';
            $number -= 5;
        }

        for ($i = 0; $i < $number; $i++) {
            $roman .= "I";
        }

        return $roman;
    }
}
