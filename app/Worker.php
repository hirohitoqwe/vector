<?php
namespace  Jobs;
abstract class Worker
{
    protected $income;

    protected $coffee;

    protected $pages;

    protected $rank;

    protected $status;

    public function __construct(int $rank,string  $status='')
    {
        $this->rank=$rank;
        $this->status=$status;
        $this->changeIncome();
        $this->statusChangeIncome();
        return $this;
    }

    public  function setStatus(string $status)
    {
        $this->status=$status;
    }

    public function setRank($rank){//установить ранг
        $this->rank=$rank;
    }

    public function getIncome()//получить ЗП
    {
        return $this->income;
    }


    public  function getCoffee()//количество выпитого коффе
    {
        return $this->coffee;
    }

    public  function getPages()//количество отчетов в страницах?
    {
        return $this->pages;
    }

    protected  function changeIncome()//менять зарплату взависимости от ранга
    {
        switch ($this->rank) {
            case 2:
                $this->income = $this->income * 1.25;
                break;
            case 3:
                $this->income = $this->income * 1.5;
                break;
        }
    }
    protected  function statusChangeIncome(){
        if ($this->status=='рук'){
            $this->income*=1.5;
        }
    }

}