<?php
namespace Persons\Employees;
use Persons\Persons;

class Employees extends Persons
{
    protected int $employeeId;
    protected double $salary;

    public function __construct(string $name, int $age, str $address,int $employeeId, double $salary)
    {
        parent::__construct($name, $age, $address);
        $this->employeeId = $employeeId;
        $this->salary = $salary;
    }

    public function getEmployeeId(): int
    {
        return $this->employeeId;
    }

    public function getSalary(): double
    {
        return $this->salary;
    }
}