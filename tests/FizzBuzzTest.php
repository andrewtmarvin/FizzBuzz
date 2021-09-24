<?php

use PHPUnit\Framework\TestCase;

require_once "./src/FizzBuzzFunctions.php";

class FizzBuzzTest extends TestCase
{
    public function testInvalidNegativeIntegerUserInput()
    {
        $this->expectException(Exception::class);
        ValidateUserInput(["FizzBuzz.php", -1]);
    }

    public function testInvalidNonIntegerUserInput()
    {
        $this->expectException(Exception::class);
        ValidateUserInput(["FizzBuzz.php", "one"]);
    }

    public function testValidPositiveIntegerUserInput()
    {
        $result = ValidateUserInput(["FizzBuzz.php", "1"]);
        $this->assertNull($result);
    }

    public function testIsMultipleOfThree()
    {
        $result = IsMultipleOfThree(9);
        $this->assertTrue($result);
        $false_result = IsMultipleOfThree(4);
        $this->assertFalse($false_result);
    }

    public function testIsMultipleOfFive()
    {
        $result = IsMultipleOfFive(10);
        $this->assertTrue($result);
        $false_result = IsMultipleOfFive(4);
        $this->assertFalse($false_result);
    }

    public function testIsMultipleOfFifteen()
    {
        $result = IsMultipleOfFifteen(45);
        $this->assertTrue($result);
        $false_result = IsMultipleOfFifteen(4);
        $this->assertFalse($false_result);
    }

    public function testConvertRangeToFizzBuzz()
    {
        $user_input = 20;
        $range = range(1, $user_input);
        $expected = "1 2 lucky 4 buzz fizz 7 8 fizz buzz 11 fizz lucky 14 fizzbuzz 16 17 fizz 19 buzz";
        $actual = ConvertRangeToFizzBuzz($range);
        $this->assertEquals($expected, $actual);
    }

    public function testHasThree()
    {
        $result = HasThree(3);
        $this->assertTrue($result);
        $false_result = HasThree(9);
        $this->assertFalse($false_result);
    }

    public function testGenerateReport()
    {
        $expected = "1 2 lucky 4 buzz fizz 7 8 fizz buzz 11 fizz lucky 14 fizzbuzz 16 17 fizz 19 buzz" . PHP_EOL
            . "fizz: 4" . PHP_EOL . "buzz: 3" . PHP_EOL . "fizzbuzz: 1" . PHP_EOL . "lucky: 2" . PHP_EOL
            . "integer: 10" . PHP_EOL;
        $actual = GenerateReport("1 2 lucky 4 buzz fizz 7 8 fizz buzz 11 fizz lucky 14 fizzbuzz 16 17 fizz 19 buzz");
        $this->assertEquals($expected, $actual);
    }
}
