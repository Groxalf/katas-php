<?php

namespace FizzBuzz;

class FizzBuzz
{

    const INITIAL_VALUE = 1;
    const LAST_VALUE = 100;

    public function generateChain()
    {
        return array_map(function ($number) {
            return $this->generateElement($number);
        }, range(self::INITIAL_VALUE, self::LAST_VALUE));
    }

    private function generateElement($number) {
        if ($this->isDivisibleByThree($number) && $this->isDivisibleByFive($number)) return 'FizzBuzz';
        if($this->isDivisibleByThree($number)) return 'Fizz';
        if ($this->isDivisibleByFive($number)) return 'Buzz';
        return strval($number);
    }

    /**
     * @param $number
     * @return bool
     */
    private function isDivisibleByThree($number)
    {
        return $number % 3 == 0;
    }

    /**
     * @param $number
     * @return bool
     */
    private function isDivisibleByFive($number)
    {
        return $number % 5 == 0;
    }

}
