<?php

require_once 'Duck.php';
require_once 'Display.php';

class DecoyDuck extends Duck
{
    use Display;

    public function can(): void
    {
        echo "DecoyDuck can: " . PHP_EOL;
        $this->swim();
        $this->display();
        echo PHP_EOL;
    }
}