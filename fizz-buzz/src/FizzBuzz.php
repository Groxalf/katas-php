<?php

namespace FizzBuzz;

class FizzBuzz
{

    const CHAIN_SIZE = 100;

    public function generateChain()
    {
        $elements = range(1, self::CHAIN_SIZE);
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
