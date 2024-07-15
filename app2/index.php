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

$cart = new Cart();
$products = [
    new Product('Product 1', 1000),
    new Product('Product 2', 2340),
    new Product('Product 3', 3000),
];
$data = $cart->add(...$products)->getTotal('€');

echo "Total: €$data";




