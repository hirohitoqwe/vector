<?php
namespace App;
class Department//класс департамента
{
    public $structure;//состав рабочих

    private $coffee=10;//10 тугриков стоит один литр кофе ДОПУСТИМ

    public  function  getCountWorkers(){//получить число сотрудников
        return count($this->structure);
    }

    public  function getExpenses(){//получить расход департамента
        $expenses=0;
        foreach ($this->structure as $arr=>$worker){
            echo  $worker->getIncome().'<br>';
            $expenses+=$worker->getIncome();
            $expenses+=$worker->getCoffee()*$this->coffee;
        }
        return $expenses;
    }

    public  function getPages(){//получить страницы департамента
        $pages=0;
        foreach ($this->structure as $worker){
            $pages+=$worker->getPages();
        }
        return $pages;
    }

    public  function getMiddleExpOn1Page(){//средний расход на одну страницу
        return $this->getExpenses()/$this->getPages();
    }
    public function addWorker($worker){
        $this->structure[]=$worker;
    }

}