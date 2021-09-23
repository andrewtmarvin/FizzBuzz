<?php
function ValidateUserInput($argv) {
    if (count($argv) < 2) {
        throw new Exception("Please pass the script a number.");
    }
    if (!is_numeric($argv[1]) || $argv[1] < 1) {
        throw new Exception("Input must be a positive integer.");
    }
};