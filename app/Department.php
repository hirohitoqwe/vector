<?php

class Department//класс департамента
{
    public $structure;//состав рабочих
    public  function  __construct(array $workers){//массив рабочих
        $this->structure=$workers;
    }

    public  function  getCountWorkers(){//получить число сотрудников
        return count($this->structure);
    }

    public  function getExpenses(){//получить расход департамента

    }

    public  function getPages(){//получить страницы департамента

    }

    public  function getMiddleExpOn1Page(){//средний расход на одну страницу

    }
    public function addWorker($worker){
        $this->structure[]=$worker;
    }

}