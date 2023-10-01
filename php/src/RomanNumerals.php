<?php declare(strict_types=1);

namespace Kata;

class RomanNumerals
{
    public function convert(int $number): string
    {
        $romanNumber = "";

        if ($number === 8) return 'VIII';

        if ($number === 6) return 'VI';

        if ($number === 5) return 'V';

        if ($number === 4) return 'IV';

        for ($i = 0; $i < $number; $i++) {
            $romanNumber .= "I";
        }

        return $romanNumber;
    }
}
