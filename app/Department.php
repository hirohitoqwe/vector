<?php

namespace App;

use Jobs\Engineer;
use Jobs\Manager;
use Jobs\Worker;

class Department//класс департамента
{
    public $employees;//состав рабочих

    private $coffeePrice = 10;//10 тугриков стоит один литр кофе

    public function __construct(public string $name)
    {//department name
    }

    public function unsetDirector()
    {
        foreach ($this->employees as $worker) {
            if ($worker->isLeader()) {
                $worker->removeLeader();
            }
        }
    }

    public function setDirector(Worker $director)//ставит работника на директора
    {
        foreach ($this->employees as $worker) {
            if ($worker == $director) {//
                $director->setIsLeader();
            }
        }
    }

    public function getCoffeePrice(): int
    {
        return $this->coffeePrice;
    }

    public function getCountWorkers()
    {//получить число сотрудников
        return count($this->employees);
    }

    public function getExpenses()
    {//получить расход департамента
        $expenses = 0;
        foreach ($this->employees as $arr => $worker) {
            $expenses += $worker->getIncome();
            $expenses += $worker->getCoffee() * $this->getCoffeePrice();
        }
        return $expenses;
    }

    public function getCoffee()
    {
        $coffee = 0;
        foreach ($this->employees as $worker) {
            $coffee += $worker->getCoffee();
        }
        return $coffee;
    }

    public function getPages()
    {//получить страницы департамента
        $pages = 0;
        foreach ($this->employees as $worker) {
            $pages += $worker->getPages();
        }
        return $pages;
    }

    public function getAverageExpensesPerPage()
    {//средний расход на одну страницу
        return $this->getExpenses() / $this->getPages();
    }

    public function addWorker(Worker $worker)
    {
        $this->employees[] = $worker;
    }

    public function getDirector()
    {
        foreach ($this->employees as $worker) {
            if ($worker->status) {//тоже метод
                return $worker;
            }
        }
    }


    public function getEngineersQuantity()
    {
        $count = 0;
        foreach ($this->employees as $worker) {
            if ($worker instanceof Engineer) {
                $count++;
            }
        }
        return $count;
    }

    public function getManagerOneTwoRankQuantity()//вынести?
    {
        $count = 0;
        foreach ($this->employees as $worker) {
            if (($worker instanceof Manager) and ($worker->getRank() == 1 or $worker->getRank() == 2)) {//instanceof
                $count++;
            }
        }
        return $count;
    }

}