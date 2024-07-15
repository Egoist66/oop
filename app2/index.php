<?php
declare(strict_types=1);

error_reporting(-1);

require_once '../vendor/autoload.php';

use App2\{Cart, Product};


/**
 * @throws JsonException
 */
function web_console_log(mixed $data): void
{
    echo "<script>";
    echo "console.log(" . json_encode($data, JSON_THROW_ON_ERROR, JSON_PRETTY_PRINT) . ")";
    echo "</script>";
}

/**
 * @param array $options
 * @return void
 */
function errorCatch(array $options): void {
    try {
        if($options['success']){
            echo $options['success']();
        }
    }
    catch (RuntimeException $e){
        if($options['catch']){
            $options['catch']($e);
        }
        echo $e->getMessage();
    }
}

$cart = new Cart();
$products = [
    new Product('Product 1', 1000),
    new Product('Product 2', 2340),
    new Product('Product 3', 3000),
];
$data = $cart
    ->add(...$products)
    ->getTotal('€');

echo "Total: €$data" . PHP_EOL;
echo "<br>";
echo $cart->setId("2222")->getId();

errorCatch([
    "success" => static fn() => web_console_log($cart),
    "catch" => static fn($e) => web_console_log($e->getMessage())

]);
