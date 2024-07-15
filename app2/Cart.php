<?php


namespace App2;

error_reporting(-1);


class Cart
{
    /**
     * @var array<Product>
     */
    public array $cartData = [];


    final public function add(Product ...$products): static
    {
        foreach ($products as $product) {
            $this->cartData[] = $product;
        }

        return $this;
    }

    final public function getTotal(string $currency = '$'): int
    {
        $total = 0;
        foreach ($this->cartData as $product) {
            $res = str_replace($currency, '', $product->getPrice($currency) . ' ');
            $total += (int)$res;
        }

        return $total;
    }

}



