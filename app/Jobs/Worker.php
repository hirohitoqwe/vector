<?php

namespace Jobs;
abstract class Worker
{
    protected $income;

    protected $coffee;

    protected $pages;

    public function __construct(protected int $rank = 1, protected bool $isLeader = false)//по умолчанию работник не глава департамента
    {
        $this->rankChangeIncome();
        $this->statusChangeIncome();
    }

    public function setIsLeader()
    {
        $this->isLeader = true;
    }

    public function removeLeader()
    {
        $this->isLeader = false;
    }

    public function isLeader()
    {
        return $this->isLeader;
    }

    public function setRank(int $rank)
    {//установить ранг
        if ($this->rank != $rank) {
            $this->rank = $rank;
            switch ($rank) {
                case 2:
                    $this->income *= 1.25;
                    break;
                case 3:
                    $this->income *= 1.5;
                    break;
            }
        }

    }

    public function getIncome()//получить ЗП
    {
        return $this->income;
    }

    public function getRank()//получить ранг
    {
        return $this->rank;
    }

    public function getCoffee()//количество выпитого коффе
    {
        return $this->coffee;
    }

    public function getPages()//количество отчетов
    {
        return $this->pages;
    }

    protected function rankChangeIncome()//менять зарплату взависимости от ранга
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

    protected function statusChangeIncome()
    {
        if ($this->isLeader) {
            $this->income *= 1.5;
        }
    }


}