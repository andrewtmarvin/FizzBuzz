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

function ConvertRangeToFizzBuzz($range) {
    foreach ($range as &$integer) {
        if (IsMultipleOfFifteen($integer)) {
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
        return sprintf("%s %s ", $carry, $item);
    });
    return trim($result);
}