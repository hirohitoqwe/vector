<?php
namespace  Jobs;
abstract class Worker
{
    private $Income;

    private  $coffee;

    private $pages;

    private $rank;

    private $status;

    public function __construct(int $rank,string  $status='')
    {
        $this->rank=$rank;
        $this->statusChangeIncome();
        $this->changeIncome();
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
        return $this->Income;
    }


    public  function getCoffee()//количество выпитого коффе
    {
        return $this->coffe;
    }

    public  function getPages()//количество отчетов в страницах?
    {
        return $this->pages;
    }

    private  function changeIncome()//менять зарплату взависимости от ранга
    {
        switch ($this->rank) {
            case 2:
                $this->Income = $this->Income * 1.25;
                break;
            case 3:
                $this->Income = $this->Income * 1.5;
                break;
            case 'Руководитель':
                $this->Income = $this->Income * 2;
                break;
        }
    }

    private  function statusChangeIncome(){
        if ($this->status=='рук'){
            $this->Income*=1.5;
        }
    }

}