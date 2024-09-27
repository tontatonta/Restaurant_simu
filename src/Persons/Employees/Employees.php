<?php
namespace Persons\Employees;
use Persons\Persons;

class Employees extends Persons
{
    protected int $employeeId;
    protected float $salary;

    public function __construct(string $name, int $age, string $address,int $employeeId, float $salary)
    {
        parent::__construct($name, $age, $address);
        $this->employeeId = $employeeId;
        $this->salary = $salary;
    }

    public function getEmployeeId(): int
    {
        return $this->employeeId;
    }

    public function getSalary(): float
    {
        return $this->salary;
    }
}