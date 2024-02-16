<?php
namespace App;




class Designer extends Worker {

    use HasRest;

    public function __construct($name, $age, $hours, public string $id) {
        parent::__construct($name, $age, $hours);
        $this->id = $id;
    }

   
    public function work(): void {
        echo "I am working designer";
    }
}
