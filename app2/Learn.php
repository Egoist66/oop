<?php

namespace App2;


class Learn
{

    public function __construct()
    {
        $this->__toString();
    }
    public function __toString(): string
    {
        return serialize($this);
    }

}

$objStr =  new Learn();



$obj = unserialize($objStr, ['allowed_classes' => true]);
var_dump($obj);

?>

<style>
    body {
        font-size: 20px;
    }
</style>
