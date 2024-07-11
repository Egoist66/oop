<?php
declare(strict_types=1);

namespace App2;


class Product
{
    public ?string $title;
    public int|float $price;


    public function __construct(string $title, int $price)
    {
        $this->title = $title;
        $this->price = $price;
    }

    /**
     * @param string $currency
     * @return string
     */
    public function getPrice( string $currency = '$'): string
    {
        return $currency . $this->price / 100;
    }

}

$laptop = new Product('Laptop', 245);

echo $laptop->getPrice('€');

echo "<pre style='font-size: 20px'>";

var_dump($laptop);

echo "</pre>";


