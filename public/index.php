
<?php




require_once '../vendor/autoload.php';
require_once '../error_log.php';

use App\Designer;
use App\Developer;
use App\Salary;

$objectConfig = [
    Developer::class => [
        "name" => "Farid",
        "age" => 26,
        ["m" => 12, "t" => 12],
        '#443342df'
    ],
    Designer::class => [
        "name" => "Peter",
        "age" => 16,
        ["m" => 132, "t" => 142],
        '#44334dff2df'
    ]
];





$developer = new Developer('Farid', 26, ["m" => 12, "t" => 12], '#443342df');
$designer = new Designer('Peter', "16", ["m" => 132, "t" => 142], '#44334dff2df');

$developer->work();
$developer->setStatus('fired');

echo "<pre style='font-size:20px'>";


$developer->rest();
$salary = Salary::count($developer->getHours());

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

$closure = fn(): Closure => (
    fn(): int => 10
);

$fn = $closure();

echo "<h2>" . $fn() . "</h2>";



var_dump($fn);


?>

<style>
    body {
        font-size: 20px;
    }
</style>
