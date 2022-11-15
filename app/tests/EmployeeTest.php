<?php

namespace Unit_Test;

use Jobs\Engineer;
use Jobs\Worker;
use Jobs\Analyst;
use Jobs\Manager;
use PHPUnit\Framework\TestCase;

class EmployeeTest extends TestCase
{
    /**
     * @dataProvider RankProvider
     */
    public function testRank(Worker $worker, int $rank)
    {
        $this->assertEquals($rank, $worker->getRank());
    }

    /**
     * @dataProvider CoffeeProvider
     */
    public function testGetCoffee(Worker $worker, int $coffee)
    {
        $this->assertEquals($coffee, $worker->getCoffee());
    }

    /**
     * @dataProvider PagesProvider
     */
    public function testPages(Worker $worker, int $pages)
    {
        $this->assertEquals($pages, $worker->getPages());
    }

    public function testSetLeader()
    {
        $newWorker = new Manager();
        $this->assertFalse($newWorker->isLeader());
        $newWorker->setIsLeader();
        $this->assertTrue($newWorker->isLeader());
    }

    public function testRemove2()
    {
        $worker = new Manager();
        $this->assertInstanceOf(Manager::class, $worker->removeLeader());
    }

    public function testSetRank()
    {
        $worker = new Manager();
        $worker->setRank(2);
        $this->assertEquals(2, $worker->getRank());
    }


    public function testLeaderRemove()
    {
        $worker = new Manager(isLeader: true);
        $this->assertTrue($worker->isLeader());
        $worker->removeLeader();
        $this->assertFalse($worker->isLeader());
    }

    public function RankProvider(): array
    {
        return [
            [new Manager(), 1],
            [new Manager(2), 2],
            [new Manager(3), 3]
        ];
    }

    public function CoffeeProvider(): array
    {
        return [
            [new Manager(), 20],
            [new Engineer(), 5],
            [new Analyst(), 50]
        ];
    }

    public function PagesProvider(): array
    {
        return [
            [new Manager(), 200],
            [new Engineer(), 50],
            [new Analyst(), 5]
        ];
    }

}