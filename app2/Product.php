<?php
declare(strict_types=1);

namespace App2;


class Product
{

    public function __construct(public ?string $title, public int $price = 1){}

    /**
     * @param string $currency
     * @return string
     */
    final public function getPrice(string $currency = '$'): string
    {
        return $currency . $this->price / 100;
    }

}

$laptop = new Product('Laptop', 245);

echo $laptop->getPrice('€');

echo "<pre style='font-size: 20px'>";

var_dump($laptop);

echo "</pre>";


