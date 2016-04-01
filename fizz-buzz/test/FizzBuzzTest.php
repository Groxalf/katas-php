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
        $this->assertEquals(100, sizeof($this->elements));
        $this->assertIsNumber($this->positionForNumber(1));
        $this->assertIsNumber($this->positionForNumber(2));
        $this->assertIsFizz($this->positionForNumber(3));
        $this->assertIsFizz($this->positionForNumber(6));
        $this->assertIsFizz($this->positionForNumber(9));
        $this->assertIsBuzz($this->positionForNumber(5));
        $this->assertIsBuzz($this->positionForNumber(10));
        $this->assertIsFizzBuzz($this->positionForNumber(15));
        $this->assertIsFizzBuzz($this->positionForNumber(30));
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

    /**
     * @param $number
     * @return mixed
     */
    private function positionForNumber($number)
    {
        return $this->elements[$number - 1];
    }
}
