<?php

namespace ArulProject;

class Customer
{
    private string $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayHello(string $name = "guest"): void
    {
        echo "Hello $name, My name is $this->name";
    }
}
