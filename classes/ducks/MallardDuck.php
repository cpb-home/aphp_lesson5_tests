<?php

require_once 'Duck.php';
require_once 'Fly.php';
require_once 'Quack.php';
require_once 'Display.php';

class MallardDuck extends Duck
{
    use Fly, Quack, Display;

    public function can(): void
    {
        echo "MallardDuck can: " . PHP_EOL;
        $this->swim();
        $this->fly();
        $this->quack();
        $this->display();
        echo PHP_EOL;
    }
}