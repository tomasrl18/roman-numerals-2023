<?php declare(strict_types=1);

namespace Kata;

class RomanNumerals
{
    public function convert(int $number): string
    {
        $romanNumber = "";

        $romanNumber .= $this->concatenateI($number);

        return $romanNumber;
    }

    public function concatenateI(int $number)
    {
        $romanNumber = "";

        for ($i = 0; $i < $number; $i++) {
            if ($number >= 10 ) {
                $romanNumber .= 'X';
                $number -= 10;
            }

            if ($number === 9) return $romanNumber . 'IX';

            if ($number >= 5) {
                $romanNumber .= "V";
                $number -= 5;
            }

            if ($number === 4) return $romanNumber . 'IV';

            $romanNumber .= "I";
        }

        return $romanNumber;
    }
}
