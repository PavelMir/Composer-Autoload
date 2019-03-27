<?php
use App\User;
use App\Employee;

require_once 'vendor/autoload.php';

$user = new User();
$user->sayHi();

echo '<br><br>';

$employee = new Employee();
$employee->sayHi();