<?php

namespace FizzBuzz\Test;

use FizzBuzz\FizzBuzz;

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{

    private $elements;

    public function setUp() {
        $fizzBuzz = new FizzBuzz();
        $this->elements = $fizzBuzz->generateChain();
    }

    /** @test */
    public function it_should_return_100_elements_properly_converted() {
        $this->assertIsFizz(3);
        $this->assertIsFizz(6);
        $this->assertIsFizz(9);
        $this->assertIsBuzz(5);
        $this->assertIsBuzz(10);
        $this->assertIsFizzBuzz(15);
        $this->assertIsFizzBuzz(30);
    }

    /** @test */
    public function it_should_have_a_total_of_one_hundred_elements() {
        $this->assertCount(100, $this->elements);
    }

    /** @test */
    public function it_should_have_elements_not_divisible_by_3_or_5_that_are_numbers() {
        $this->assertIsNumber(1);
        $this->assertIsNumber(2);
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
        $fizzBuzz = new FizzBuzz();
        $elements = $fizzBuzz->generateChain();
        return $elements[$number - 1];
    }

}
