<?php

namespace App;

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

    public function getAllCountWorkers()//and other all and delete filter.php
    {

    }

    //TODO delete filter and set other methods of company(get all workers,coffee and other)
}