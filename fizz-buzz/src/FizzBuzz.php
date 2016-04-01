<?php

namespace FizzBuzz;

class FizzBuzz
{

    const CHAIN_SIZE = 100;

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

    public function generateChain()
    {
        $elements = [];
        for ($i = 0; $i < self::CHAIN_SIZE; $i++) {
            array_push($elements, $this->parse($i));
        }
        return $elements;
    }

}
