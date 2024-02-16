<?php

namespace App;

interface IWorker {
    public function setStatus(string $value): void;
    public function getStatus(): string;
}