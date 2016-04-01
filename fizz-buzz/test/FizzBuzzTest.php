<?php

namespace FizzBuzz\Test;

use FizzBuzz\FizzBuzz;

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
    /** @var  FizzBuzz */
    private $fizzBuzz;

    public function setUp() {
        $this->fizzBuzz = new FizzBuzz();
    }

    /** @test */
    public function it_should_return_a_number_when_is_not_divisible_by_3_or_5() {
        $this->assertIsNumber(1);
        $this->assertIsNumber(2);
        $this->assertIsNumber(4);
    }

    /** @test */
    public function it_should_return_fizz_when_number_is_divisible_by_3() {
        $this->assertIsFizz(3);
        $this->assertIsFizz(6);
        $this->assertIsFizz(9);
    }

    /** @test */
    public function it_should_return_buzz_when_number_is_divisible_by_5() {
        $this->assertIsBuzz(5);
        $this->assertIsBuzz(10);
    }

    /** @test */
    public function it_should_return_fizzbuzz_when_number_is_divisible_by_3_and_5() {
        $this->assertIsFizzBuzz(15);
        $this->assertIsFizzBuzz(30);
    }

    /**
     * @param $number
     */
    private function assertIsNumber($number)
    {
        $this->assertEquals($this->fizzBuzz->parse($number), "$number");
    }

    /**
     * @param $number
     */
    private function assertIsFizz($number) {
        $this->assertEquals($this->fizzBuzz->parse($number), 'Fizz');
    }

    /**
     * @param $number
     */
    private function assertIsBuzz($number) {
        $this->assertEquals($this->fizzBuzz->parse($number), 'Buzz');
    }

    /**
     * @param $number
     */
    private function assertIsFizzBuzz($number) {
        $this->assertEquals($this->fizzBuzz->parse($number), 'FizzBuzz');
    }
}
