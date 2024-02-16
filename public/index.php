<?php

declare(strict_types= 1);
error_reporting(E_ALL);

require_once '../vendor/autoload.php';


$developer = new \App\Developer('Farid', 26, ["m" => 12, "t" => 12], '#443342df');
$designer = new \App\Designer('Peter', 16, ["m" => 132, "t" => 142], '#44334dff2df');

$developer->work();
$developer->setStatus('fired');

echo "<pre style='font-size:20px'>";


$developer->rest();
$salary = \App\Salary::count($developer->getHours());

echo $salary;

echo "</pre>";

// Abstraction
// Incapsulation
// Inheritance

foreach([$developer, $designer] as $worker){

    $worker->work();
}

echo "</br>";

echo $developer;

