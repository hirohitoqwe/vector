<?php

namespace App;

use Jobs\Worker;

class Department//класс департамента
{
    public $structure;//состав рабочих

    private $coffeePrice = 10;//10 тугриков стоит один литр кофе

    public function __construct(public string $name)
    {//department name

    }

    public function unsetDirector()
    {
        foreach ($this->structure as $worker) {
            if ($worker->status) {//заменить это на метод
                $worker->status =;//метод снятия лидера
            }
        }
    }

    public function setDirector(Worker $director)
    {
        foreach ($this->structure as $worker) {
            if ($worker == $director) {//заменить методом
                $director->isLeader = true;//методом
            }
        }
    }

    public function getCountWorkers()
    {//получить число сотрудников
        return count($this->structure);
    }

    public function getExpenses()
    {//получить расход департамента
        $expenses = 0;
        foreach ($this->structure as $arr => $worker) {//employes-сотрудники
            $expenses += $worker->getIncome();
            $expenses += $worker->getCoffee() * $this->coffeePrice;//getcoffeprice method
        }
        return $expenses;
    }

    public function getCoffee()
    {
        $coffee = 0;
        foreach ($this->structure as $worker) {
            $coffee += $worker->getCoffee();
        }
        return $coffee;
    }

    public function getPages()
    {//получить страницы департамента
        $pages = 0;
        foreach ($this->structure as $worker) {
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
        $this->structure[] = $worker;
    }

    public function getDirector()
    {
        foreach ($this->structure as $worker) {
            if ($worker->status) {//тоже метод
                return $worker;
            }
        }
    }


    public function getEngineersQuantity()
    {
        $count = 0;
        foreach ($this->structure as $worker) {
            if (get_class($worker) == 'Jobs\Engineer') {//instanceof
                $count++;
            }
        }
        return $count;
    }

    public function getManagerQuantity()
    {//вынести
        $count = 0;
        foreach ($this->structure as $worker) {
            if (get_class($worker) == 'Jobs\Manager' and ($worker->getRank() == 1 or $worker->getRank() == 2)) {//instanceof
                $count++;
            }
        }
        return $count;
    }

}