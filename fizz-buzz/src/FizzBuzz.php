<?php

namespace FizzBuzz;

class FizzBuzz
{
    public function parse($number)
    {
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
