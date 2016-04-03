<?php

namespace FizzBuzz;

class FizzBuzz
{

    const INITIAL_VALUE = 1;
    const LAST_VALUE = 100;

    public function generateChain()
    {
        $elements = range(self::INITIAL_VALUE, self::LAST_VALUE);
        return array_map(function ($number) {
            return $this->generateElement($number);
        }, $elements);
    }

    private function generateElement($number) {
        return $this->checkForFizz($number) . $this->checkForBuzz($number) ?: strval($number);
    }

    private function checkForFizz($number)
    {
        if ($number % 3 == 0) return 'Fizz';
        return false;
    }

    private function checkForBuzz($number)
    {
        if ($number % 5 == 0) return 'Buzz';
        return false;
    }

}
