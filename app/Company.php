<?php

namespace App;
use App\Department;
class Company
{
    private $departments = [];
    /*
    public function generateDepartments()
    {//набор сотрудников в департаменты и сложение их в компанию
        $generate = new Generate();

        $Sales = new Department('Продажи');

        $Procurement = new Department('Закупки');

        $Ads = new Department('Рекламы');

        $Logistic = new Department('Логистики');

        $generate->generateProcurementDep($Procurement);//ДЕПАРТАМЕНТ ЗАКУПОК
        $generate->generateSalesDep($Sales);//ДЕПАРТАМЕНТ ПРОДАЖ
        $generate->generateAdsDep($Ads);//ДЕПАРТАМЕНТ РЕКАЛМЫ
        $generate->generateLogisticsDep($Logistic);//ДЕПАРТАМЕНТ ЛОГИСТИКИ
        array_push($this->employees, $Sales, $Procurement, $Ads, $Logistic);
        return $this->employees;
    }
    */
    public function takeDepartments(array $departments)
    {
        $this->departments=$departments;
    }

    public function getTotalCountWorkers()//and other all and delete filter.php
    {
        $employees=0;
        foreach ($this->departments as $department){
            $employees+=$department->getCountWorkers();
        }
        return $employees;
    }

    public function getTotalExpenses()//and other all and delete filter.php
    {
        $expenses=0;
        foreach ($this->departments as $department){
            $expenses+=$department->getExpenses();
        }
        return $expenses;
    }



    public function getTotalExpenditureCoffee()//and other all and delete filter.php
    {
        $expenditureCoffee=0;
        foreach ($this->departments as $department){
            $expenditureCoffee+=$department->getCoffee();
        }

        return $expenditureCoffee;
    }

    public function getTotalPages()//and other all and delete filter.php
    {
        $pages=0;
        foreach ($this->departments as $department){
            $pages+=$department->getPages();
        }
        return $pages;
    }

    public function getTotalAverageExpensesPerPage()//and other all and delete filter.php
    {
        $averagePages=0;
        foreach ($this->departments as $department){
            $averagePages+=round($department->getAverageExpensesPerPage());
        }
        return $averagePages;
    }
}