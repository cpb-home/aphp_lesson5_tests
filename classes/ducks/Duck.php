<?php

abstract class Duck
{
    public function swim()
    {
        echo 'может плавать' . PHP_EOL;
    }

    abstract public function can(): void;
}