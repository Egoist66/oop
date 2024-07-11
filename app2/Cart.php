<?php

namespace App2;
use App2\Product;
class Cart
{
    public array $cartData = [];


    final public function add(array ...$products): void
    {
        foreach ($products as $product) {
            $this->cartData[] = $product;
        }
    }

    final public function getTotal(): int
    {
        $total = 0;
        foreach ($this->cartData as $product) {
            $total += $product->getPrice();
        }
        return $total;
    }

}

$cart = new Cart();
$cart->add([new Product('Laptop', 245), new Product('Phone', 200)]);
var_dump($cart);

