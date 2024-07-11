<?php

namespace App;

    /**
     * Print the current status of the object followed by the string ' has rest'.
     *
     * @return void
     */

trait HasRest {
    public function rest(): void {
        print_r($this->getStatus() . ' has rest');
    }
}