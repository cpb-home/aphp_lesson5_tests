<?php

require_once 'Duck.php';
require_once 'Quack.php';
require_once 'Display.php';

class RubberDuck extends Duck
{
    use Quack, Display;

    public function can(): void
    {
        echo "RubberDuck can: " . PHP_EOL;
        $this->swim();
        $this->quack();
        $this->display();
        echo PHP_EOL;
    }
}