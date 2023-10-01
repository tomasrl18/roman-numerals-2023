<?php declare(strict_types=1);

namespace Kata;

class RomanNumerals
{
    public function convertRomanNumeral(int $number): string
    {
        $roman = "";

        for ($i = 0; $i < $number; $i++) {
            $roman .= "I";
        }

        return $roman;

//        if ($number === 2) {
//            return 'II';
//        }
//
//        if ($number === 3) {
//            return 'III';
//        }

//        if ($number === 5) {
//            return 'V';
//        }
//
//        if ($number === 10) {
//            return 'X';
//        }
//
//        if ($number === 50) {
//            return 'L';
//        }
//
//        if ($number === 100) {
//            return 'C';
//        }
//
//        if ($number === 500) {
//            return 'D';
//        }
//
//        if ($number === 1000) {
//            return 'M';
//        }

        //return 'I';
    }
}
