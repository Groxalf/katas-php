<?php

namespace PasswordValidator;

class PasswordValidator
{

    /**
     * @return bool
     */
    public function validate($password)
    {
        if ($this->doesNotContainALowerCharacter($password)) return false;
        if ($this->doesNotContainAnUpperCharacter($password)) return false;
        if ($this->doesNotContainANumber($password)) return false;
        if ($this->doesNotContainAUnderscore($password)) return false;
        if ($this->hasLessThanEightCharacters($password)) return false;
        return true;
    }

    /**
     * @param $password
     * @return bool
     */
    private function doesNotContainALowerCharacter($password)
    {
        return preg_match('/[A-Z]+/', $password) == 0;
    }

    /**
     * @param $password
     * @return bool
     */
    private function doesNotContainAnUpperCharacter($password)
    {
        return preg_match('/[a-z]+/', $password) == 0;
    }

    /**
     * @param $password
     * @return bool
     */
    private function doesNotContainANumber($password)
    {
        return preg_match('/[0-9]+/', $password) == 0;
    }

    /**
     * @param $password
     * @return bool
     */
    private function doesNotContainAUnderscore($password)
    {
        return preg_match('/_+/', $password) == 0;
    }

    /**
     * @param $password
     * @return bool
     */
    private function hasLessThanEightCharacters($password)
    {
        return strlen($password) < 8;
    }
}
