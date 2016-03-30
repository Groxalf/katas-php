<?php

namespace PasswordValidator\Test;

use PasswordValidator\PasswordValidator;

class PasswordValidatorTest extends \PHPUnit_Framework_TestCase
{

    const PASSWORD = 'Ruben_DM92';
    var $passwordValidator;

    public function setUp() {
        $this->passwordValidator = new PasswordValidator();
    }

    /** @test */
    public function should_be_a_correct_password()
    {
        $this->assertTrue($this->passwordValidator->validate($this::PASSWORD));
    }

    /** @test */
    public function should_fail_due_to_a_missing_capital_letter()
    {
        $this->assertFalse($this->passwordValidator->validate('ruben_dm92'));
    }

    /** @test */
    public function should_fail_due_to_a_missing_lowercase_letter()
    {
        $this->assertFalse($this->passwordValidator->validate('RUBEN_DM92'));
    }

    /** @test */
    public function should_fail_due_to_a_missing_number_inside()
    {
        $this->assertFalse($this->passwordValidator->validate('Ruben_DMMM'));
    }

    /** @test */
    public function should_fail_due_to_a_missing_underscore_character()
    {
        $this->assertFalse($this->passwordValidator->validate('RubenDMM92'));
    }
    
    /** @test */
    public function should_have_at_least_eight_character()
    {
        $this->assertFalse($this->passwordValidator->validate('Run_D29'));
    }
    
}
