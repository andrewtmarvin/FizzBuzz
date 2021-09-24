<?php 
require_once "FizzBuzzFunctions.php";

try {
    ValidateUserInput($argv);
    $range = range(1, $argv[1]);
    $fizzbuzzed_range = ConvertRangeToFizzBuzz($range);
    $report = GenerateReport($fizzbuzzed_range);
    echo $report;
} catch (Exception $e) {
    echo $e->getMessage();
}