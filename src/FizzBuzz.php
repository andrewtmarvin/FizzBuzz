<?php
require_once "FizzBuzzFunctions.php";

try {
    ValidateUserInput($argv);
    $range = range(1, $argv[1]);
    $result = ConvertRangeToFizzBuzz($range);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage();
}