<?php
require_once "FizzBuzzFunctions.php";

try {
    ValidateUserInput($argv);
} catch (Exception $e) {
    echo $e->getMessage();
}