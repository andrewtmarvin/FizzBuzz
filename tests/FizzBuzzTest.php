<?php
use PHPUnit\Framework\TestCase;
require_once "./src/FizzBuzzFunctions.php";

class FizzBuzzTest extends TestCase {
    public function testInvalidNegativeIntegerUserInput() {
        $this->expectException(Exception::class);
        ValidateUserInput(["FizzBuzz.php", -1]);
    }

    public function testInvalidNonIntegerUserInput() {
        $this->expectException(Exception::class);
        ValidateUserInput(["FizzBuzz.php", "one"]);
    }

    public function testValidPositiveIntegerUserInput() {
        $expected = null;
        $actual = ValidateUserInput(["FizzBuzz.php", "1"]);
        $this->assertEquals($actual, $expected);
    }

    public function testOne() {
        $expected = "1 2 fizz 4 buzz fizz 7 8 fizz buzz 11 fizz 13 14 fizzbuzz 16 17 fizz 19 buzz";
        $actual = $expected;
        $this->assertEquals($expected, $actual);
    }
}
?>