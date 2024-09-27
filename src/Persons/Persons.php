<?php
namespace Persons;

abstract class Person
{
    protected $name;
    protected $age;
    protected $address;

    public function __construct($name, $age, $address)
    {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }
}