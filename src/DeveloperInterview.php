<?php

declare(strict_types=1);

class DeveloperInterview
{
    /**
     * Write a short program that concats each number from 1 to 100.
     *
     * For each multiple of 3, concat "Fizz" instead of the number.
     *
     * For each multiple of 5, concat "Buzz" instead of the number.
     *
     * For numbers which are multiples of both 3 and 5, concat "FizzBuzz"
     * instead of the number.
     *
     * @return string
     */
    public static function fizzBuzz(): string
    {
        $fizzBuzz = '';

        for ($i = 1; $i <= 100; $i++) {
            if ($i % 3 === 0 && $i % 5 === 0) {
                $fizzBuzz .= 'FizzBuzz';
                continue;
            }
            if ($i % 3 === 0) {
                $fizzBuzz .= 'Fizz';
                continue;
            }
            if ($i % 5 === 0) {
                $fizzBuzz .= 'Buzz';
                continue;
            }
            $fizzBuzz .= $i;
        }

        return $fizzBuzz;
    }

    /**
     * For a given number, will return its value in Roman numerals.
     *
     * Roman Numerals Chart
     *
     * Roman Numeral | Number Value | Use As Inputs
     * --------------|--------------|---------------
     * I             | 1            | I
     * V             | 5            | V
     * X             | 10           | X
     * L             | 50           | L
     * C             | 100          | C
     * D             | 500          | D
     * M             | 1,000        | M
     *
     * @param int $value An integer between 0 and 3999
     *
     * @return string The roman number equivalent
     */
    public static function parseToRoman(int $value): string
    {
        $roman = '';

        $thousands = $value - $value % 1000;
        $hundreds = ($value - $thousands - (($value - $thousands) % 100));
        $tenths = ($value - $thousands - $hundreds) - (($value - $thousands - $hundreds) % 10);
        $digit = $value - $thousands - $hundreds - $tenths;

        $roman .= str_repeat('M', (int)floor($value / 1000));

        if($hundreds){
            switch ($hundreds){
                case $hundreds <= 300:
                    $roman .= str_repeat('C', $hundreds / 100);
                    break;
                case $hundreds === 400:
                    $roman .= 'CD';
                    break;
                case $hundreds === 500:
                    $roman .= 'D';
                    break;
                case $hundreds > 500 && $hundreds <= 800:
                    $roman .= 'D' . str_repeat('C', ($hundreds - 500) / 100);
                    break;
                case $hundreds === 900:
                    $roman .= 'CM';
                    break;
            }
        }

        if($tenths){
            switch ($tenths){
                case $tenths <= 30:
                    $roman .= str_repeat('X', $tenths / 10);
                    break;
                case $tenths === 40:
                    $roman .= 'XL';
                    break;
                case $tenths === 50:
                    $roman .= 'L';
                    break;
                case $tenths > 50 && $tenths <= 80:
                    $roman .= 'L' . str_repeat('X', ($tenths - 50) / 10);
                    break;
                case $tenths === 90:
                    $roman .= 'CX';
                    break;
            }
        }

        if($digit){
            switch ($digit){
                case $digit <= 3:
                    $roman .= str_repeat('I', $tenths);
                    break;
                case $digit === 4:
                    $roman .= 'IV';
                    break;
                case $digit === 5:
                    $roman .= 'V';
                    break;
                case $digit > 5 && $digit <= 8:
                    $roman .= 'V' . str_repeat('I', $digit - 5);
                    break;
                case $digit === 9:
                    $roman .= 'IX';
                    break;
            }
        }

        return $roman;
    }

    /**
     * ROT-13 is the encrypting of a message by exchanging each of the
     * letters on the first half of the alphabet with the corresponding
     * letter in the second half of the alphabet (that is, swapping
     * positions by 13 characters). Thus, A becomes N, B becomes O,
     * and so forth, and conversely, N becomes A, O becomes B, and so
     * forth. Numbers, spaces and punctuation are not changed.
     *
     * Using the native `str_rot13` is forbiden, make your own implementation!
     *
     * @param string $value The string to decode
     *
     * @return string The decoded string
     */
    public static function toRot13(string $value): string
    {
        $rot13 = '';

        $alphabet_uppercase = [ 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];

        for ($i = 0; $i < strlen($value); $i++){

            if(in_array(strtoupper($value[$i]), $alphabet_uppercase)){

                $value[$i] = ctype_upper($value[$i]) ? $alphabet_uppercase[(array_search($value[$i], $alphabet_uppercase) + 13) % 26] : strtolower($alphabet_uppercase[(array_search(strtoupper($value[$i]), $alphabet_uppercase) + 13) % 26]);

            }

            $rot13 .= $value[$i];
        }

        return $rot13;
    }

    /**
     * Write a regular expression that extracts the year from the $text
     * variable
     *
     * @return string the year
     */
    public static function extractYear(): string
    {
        $text = 'Rapport n°2187 (09/2019) - Achats';
        $year = '';

        if(preg_match('/\/[0-9]{4}\)/', $text, $matches)){
            $year = $matches[0];
        }

        return substr($year,1, 4);
    }

    public function doSomething()
    {
    }

    /**
     * Ouch, this code is ugly. Can you improve it?
     *
     * @return boolean
     */
    public function simplifyMe($report, $rc)
    {
        if ($report !== '' || $rc !== 1) {
            $this->doSomething();
        }

    }

    /**
     * Get the factorial of a number
     *
     * @param int $number
     *
     * @return int
     */
    public static function factorial(int $number): int
    {
        $factorial = 1;

        for($i = 1; $i <= $number; $i++){

            $factorial *= $i;

        }

        return $factorial;
    }

    /**
     * Get the angle formed by the hours and the minutes hands
     *
     * @param int $hours
     * @param int $minutes
     *
     * @return int
     */
    public static function clockAngle(int $hours, int $minutes): int
    {

        return (int)abs((0.5 * ($hours * 60 + $minutes)) - (6 * $minutes));
    }
}
