<?php
namespace Persons\Customers;
use Persons\Persons;

class Customers extends Persons
{

    public function interestedCategories()
    {
        return $this->email;
    }

    public function getPhone()
    {
        return $this->phone;
    }
}