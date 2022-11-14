<?php

namespace Unit;

use Jobs\Engineer;
use Jobs\Worker;
use Jobs\Analyst;
use Jobs\Manager;
use Jobs\MarketingSpecialist;
use PHPUnit\Framework\TestCase;

class EmployeeTest extends TestCase
{
    /**
     * @dataProvider testRankProvider
     */
    public function testRank(Worker $worker, int $rank)
    {
        $this->assertEquals($rank, $worker->getRank());
    }

    /**
     * @dataProvider testCoffeeProvider
     */
    public function testGetCoffee(Worker $worker, int $coffee)
    {
        $this->assertEquals($coffee, $worker->getCoffee());
    }

    /**
     * @dataProvider testPagesProvider
     */
    public function testPages(Worker $worker, int $pages)
    {
        $this->assertEquals($pages, $worker->getPages());
    }

    public function testRemoveLeader()
    {
        $newWorker = new Manager();
        $this->assertFalse($newWorker->isLeader());
        $newWorker->setIsLeader();
        $this->assertTrue($newWorker->isLeader());
    }

    public function testRankProvider()
    {
        return [
            [new Manager(), 1],
            [new Manager(2), 2],
            [new Manager(3), 3]
        ];
    }

    public function testCoffeeProvider()
    {
        return [
            [new Manager(), 20],
            [new Engineer(), 5],
            [new Analyst(), 50]
        ];
    }

    public function testPagesProvider()
    {
        return [
            [new Manager(), 200],
            [new Engineer(), 50],
            [new Analyst(), 5]
        ];
    }

}