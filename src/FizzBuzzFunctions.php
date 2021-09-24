<?php
function ValidateUserInput($argv) {
    if (count($argv) < 2) {
        throw new Exception("Please pass the script a number.");
    }
    if (!is_numeric($argv[1]) || $argv[1] < 1) {
        throw new Exception("Input must be a positive integer.");
    }
};

function IsMultipleOfThree($num) {
    return $num % 3 === 0;
}

function IsMultipleOfFive($num) {
    return $num % 5 === 0;
}

function IsMultipleOfFifteen($num) {
    return $num % 15 === 0;
}

function HasThree($num) {
    return str_contains(strval($num), "3") ? true : false; 
}

function ConvertRangeToFizzBuzz($range) {
    foreach ($range as &$integer) {
        if (HasThree($integer)) {
            $integer = "lucky";
        }
        else if (IsMultipleOfFifteen($integer)) {
            $integer = "fizzbuzz";
        }
        else if (IsMultipleOfFive($integer)) {
            $integer = "buzz";
        }
        else if (IsMultipleOfThree($integer)) {
            $integer = "fizz";
        }
    }
    $result = array_reduce($range, function ($carry, $item) {
        return sprintf("%s %s", $carry, $item);
    });
    return trim($result);
}

function GenerateReport($converted_range) {
    $report = $converted_range . PHP_EOL;
    $fizz_count = 0;
    $buzz_count = 0;
    $fizzbuzz_count = 0;
    $lucky_count = 0;
    $integer_count = 0;
    $range_items = explode(" ", $converted_range);
    foreach ($range_items as $item) {
        if ($item === "fizz") {
            $fizz_count++;
        }
        else if ($item === "buzz") {
            $buzz_count ++;
        }
        else if ($item == "fizzbuzz") {
            $fizzbuzz_count ++;
        } 
        else if ($item === "lucky") {
            $lucky_count ++;
        }
        else {
            $integer_count ++;
        }
    }
    $report = $report . "fizz: " . strval($fizz_count) . PHP_EOL;
    $report = $report . "buzz: " . strval($buzz_count) . PHP_EOL;
    $report = $report . "fizzbuzz: " . strval($fizzbuzz_count) . PHP_EOL;
    $report = $report . "lucky: " . strval($lucky_count) . PHP_EOL;
    $report = $report . "integer: " . strval($integer_count) . PHP_EOL;
    return $report;
}