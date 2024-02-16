<?php

declare(strict_types= 1);

namespace App;

abstract class Worker implements IWorker {

    private string $name = "";
    private string $status = 'worker';

    private int $age;
    private array $hours = [];

    public function __construct(string $name, int $age, array $hours) {
        $this->name = $name;
        $this->age = $age;
        $this->hours = $hours;
    }

    abstract public function work() : void;

    public function setStatus(string $value): void {
        $this->status = $value;
    }
    public function getStatus(): string {
        return $this->status;
    }

    public function getHours(): array {
        return $this->hours;
    }
}

