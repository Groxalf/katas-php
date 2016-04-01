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
    public function it_should_return_100_elements_properly_converted() {
        $elements = $this->fizzBuzz->generateChain();
        $this->assertTrue(sizeof($elements) == 100);
        $this->assertIsNumber($elements[0]);
        $this->assertIsNumber($elements[1]);
        $this->assertIsNumber($elements[2]);
        $this->assertIsFizz($elements[3]);
        $this->assertIsFizz($elements[6]);
        $this->assertIsFizz($elements[9]);
        $this->assertIsBuzz($elements[5]);
        $this->assertIsBuzz($elements[10]);
        $this->assertIsFizzBuzz($elements[15]);
        $this->assertIsFizzBuzz($elements[30]);
    }

    /**
     * @param $number
     */
    private function assertIsNumber($number)
    {
        $this->assertEquals($number, "$number");
    }

    /**
     * @param $number
     */
    private function assertIsFizz($number) {
        $this->assertEquals($number, 'Fizz');
    }

    /**
     * @param $number
     */
    private function assertIsBuzz($number) {
        $this->assertEquals($number, 'Buzz');
    }

    /**
     * @param $number
     */
    private function assertIsFizzBuzz($number) {
        $this->assertEquals($number, 'FizzBuzz');
    }
}
