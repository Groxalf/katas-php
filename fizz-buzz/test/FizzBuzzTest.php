<?php

namespace FizzBuzz\Test;

use FizzBuzz\FizzBuzz;

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{

    /** @test */
    public function it_should_have_a_total_of_one_hundred_elements() {
        $this->assertCount(100, $this->generateFizzBuzzChain());
    }

    /** @test */
    public function it_should_be_a_number_for_the_elements_that_are_not_divisible_by_3_or_5_that_are_numbers() {
        $this->assertIsNumber(1);
        $this->assertIsNumber(2);
    }

    /** @test */
    public function it_should_be_fizz_for_the_elements_that_are_only_divisible_by_three_() {
        $this->assertIsFizz(3);
        $this->assertIsFizz(6);
        $this->assertIsFizz(9);
    }

    /** @test */
    public function it_should_be_buzz_for_the_elements_that_are_only_divisible_by_five() {
        $this->assertIsBuzz(5);
        $this->assertIsBuzz(10);
    }

    /** @test */
    public function it_should_be_fizzbuzz_for_the_elements_that_are_divisible_by_three_and_five() {
        $this->assertIsFizzBuzz(15);
        $this->assertIsFizzBuzz(30);
    }

    /**
     * @param $number
     */
    private function assertIsNumber($number)
    {
        $position = $this->positionForNumber($number);
        $this->assertEquals($position, "$position");
    }

    /**
     * @param $number
     */
    private function assertIsFizz($number) {
        $position = $this->positionForNumber($number);
        $this->assertEquals($position, 'Fizz');
    }

    /**
     * @param $number
     */
    private function assertIsBuzz($number) {
        $position = $this->positionForNumber($number);
        $this->assertEquals($position, 'Buzz');
    }

    /**
     * @param $number
     */
    private function assertIsFizzBuzz($number) {
        $position = $this->positionForNumber($number);
        $this->assertEquals($position, 'FizzBuzz');
    }

    /**
     * @param $number
     * @return mixed
     */
    private function positionForNumber($number)
    {
        $elements = $this->generateFizzBuzzChain();
        return $elements[$number - 1];
    }

    private function generateFizzBuzzChain()
    {
        $fizzBuzz = new FizzBuzz();
        return $fizzBuzz->generateChain();
    }


}
