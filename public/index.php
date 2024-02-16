<?php

declare(strict_types= 1);
error_reporting(E_ALL);

require_once '../vendor/autoload.php';


$developer = new \App\Developer('Farid', 26, ["m" => 12, "t" => 12], '#443342df');

$developer->work();
$developer->setStatus('fired');

echo "<pre style='font-size:20px'>";


var_export($developer);


echo "</pre>";

