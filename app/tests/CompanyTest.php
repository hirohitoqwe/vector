<?php

namespace App\tests;

use App\Company;
use App\Department;
use Jobs\Analyst;
use Jobs\Manager;
use PHPUnit\Framework\TestCase;

class CompanyTest extends TestCase
{

    protected $company;

    public function setUp(): void
    {
        $this->company = new Company();
        $dep1 = new Department("Продажи");
        $dep2 = new Department("Закупки");
        $dep1->addWorker(new Manager(1));
        $dep2->addWorker(new Analyst(1));

        $this->company->takeDepartments([$dep1, $dep2]);
    }

    public function testExpenses()
    {
        $this->assertEquals(2000, $this->company->getTotalExpenses());
    }

    public function testCountWorkers()
    {
        $this->assertEquals(2, $this->company->getTotalCountWorkers());
    }

    public function testCountOfDepartments()
    {
        $this->assertEquals(2, $this->company->getCountOfDepartments());
    }

    public function testAddDepartment()
    {
        $this->company->addDepartment(new Department("test"));
        $this->assertEquals(3,$this->company->getCountOfDepartments());
    }

}