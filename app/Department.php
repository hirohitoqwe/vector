<?php
namespace App;
class Department//класс департамента
{
    public $structure;//состав рабочих

    public $name;

    private $coffee=10;//10 тугриков стоит один литр кофе ДОПУСТИМ

    public function __construct($name){
        $this->name=$name;
    }

    public function unsetDirector(){
        foreach ($this->structure as $worker){
            if($worker->status=='рук'){
                $worker->status='';
            }
        }
    }

    public function setDirector($director){
        foreach ($this->structure as $worker){
            if($worker==$director){
                $director->status='рук';
            }
        }
    }

    public  function  getCountWorkers(){//получить число сотрудников
        return count($this->structure);
    }

    public  function getExpenses(){//получить расход департамента
        $expenses=0;
        foreach ($this->structure as $arr=>$worker){
            $expenses+=$worker->getIncome();
            $expenses+=$worker->getCoffee()*$this->coffee;
        }
        return $expenses;
    }

    public  function getCoffee(){
        $coffee=0;
        foreach ($this->structure as $worker){
            $coffee+=$worker->getCoffee();
        }
        return $coffee;
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

    public function getDirector(){
        foreach ($this->structure as $worker){
            if($worker->status=='рук'){
                return $worker;
            }
        }
    }


    public function getEngineersQuantity(){
        $count=0;
        foreach ($this->structure as $worker){
            if (get_class($worker)=='Jobs\Engineer'){
                $count++;
            }
        }
        return $count;
    }

    public function getManagerQuantity(){
        $count=0;
        foreach ($this->structure as $worker){
            if (get_class($worker)=='Jobs\Manager' and ($worker->getRank()==1 or $worker->getRank()==2)){
                $count++;
            }
        }
        return $count;
    }

}