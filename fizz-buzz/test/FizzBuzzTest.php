<?php

namespace FizzBuzz\Test;

use FizzBuzz\FizzBuzz;

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
    public function test_it_should_return_a_number_when_is_not_divisible_by_3_or_5()
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals($fizzBuzz->parse(1), '1');
        $this->assertEquals($fizzBuzz->parse(2), '2');
        $this->assertEquals($fizzBuzz->parse(4), '4');
    }

    public function test_it_should_return_fizz_when_number_is_divisible_by_3() {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals($fizzBuzz->parse(3), 'Fizz');
        $this->assertEquals($fizzBuzz->parse(6), 'Fizz');
        $this->assertEquals($fizzBuzz->parse(9), 'Fizz');
    }

    public function test_it_should_return_buzz_when_number_is_divisible_by_5() {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals($fizzBuzz->parse(5), 'Buzz');
        $this->assertEquals($fizzBuzz->parse(10), 'Buzz');
    }
    
    public function test_it_should_return_fizzbuzz_when_number_is_divisible_by_3_and_5() {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals($fizzBuzz->parse(15), 'FizzBuzz');
        $this->assertEquals($fizzBuzz->parse(30), 'FizzBuzz');
    }
}
