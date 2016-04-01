<?php

namespace FizzBuzz;

class FizzBuzz
{

    const CHAIN_SIZE = 100;

    public function generateChain()
    {
        return array_map([$this, 'parse'], range(1, self::CHAIN_SIZE));
    }

    private function parse($number)
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
