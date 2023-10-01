<?php declare(strict_types=1);

namespace Kata;

class RomanNumerals
{
    public function convert(int $number): string
    {
        $romanNumber = "";

        for ($i = 0; $i < $number; $i++) {
            $romanNumber .= "I";
        }

        return $romanNumber;
    }
}
