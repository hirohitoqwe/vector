<?php
namespace App;
class Department//класс департамента
{
    public $structure;//состав рабочих


    public  function  getCountWorkers(){//получить число сотрудников
        return count($this->structure);
    }

    public  function getExpenses(){//получить расход департамента
        $expenses=0;
        foreach ($this->structure as $worker){
            $expenses+=$worker->getIncome;
        }
        return $expenses;
    }

    public  function getPages(){//получить страницы департамента
        $pages=0;
        foreach ($this->structure as $worker){
            $pages+=$worker->getPages;
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