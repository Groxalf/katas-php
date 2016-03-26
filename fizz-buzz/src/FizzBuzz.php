<?php

namespace FizzBuzz;

class FizzBuzz
{
    public function parse($number)
    {
        $result = '';
        if ($this->isDivisibleByThree($number)) $result .= 'Fizz';
        if ($this->isDivisibleByFive($number)) $result .= 'Buzz';
        return (!empty($result)) ?  $result : strval($number);
    }

    private function isDivisibleByThree($number)
    {
        return $number % 3 == 0;
    }

    private function isDivisibleByFive($number)
    {
        return $number % 5 == 0;
    }
}
