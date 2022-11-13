<?php

namespace Unit;

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
    public function testRank(int $rank, Worker $worker)
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
            [],
            []
        ];
    }

    public function testCoffeeProvider()
    {
        return [
            [],
            []
        ];
    }

    public function testPagesProvider()
    {
        return [
            [],
            []
        ];
    }

}