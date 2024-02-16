<?php
namespace App;




class Developer extends Worker
{

    use HasRest;

    public function __construct($name, $age, $hours, public string $id)
    {
        parent::__construct($name, $age, $hours);
        $this->id = $id;
    }


    public function work(): void
    {
        echo "I am working developer";
    }

    public function __toString(): string
    {
        return $this->getStatus();
    }

    public function __call($method, $args)
    {
        echo $method;
    }
}





