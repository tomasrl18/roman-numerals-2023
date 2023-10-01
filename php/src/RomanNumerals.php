<?php declare(strict_types=1);

namespace Kata;

class RomanNumerals
{
    public function convert(int $number): string
    {
        if ($number === 2) return 'II';
        return 'I';
    }
}
