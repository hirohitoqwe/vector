<?php

namespace App;

class Company
{
    private $company = [];//employes

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
        array_push($this->company, $Sales, $Procurement, $Ads, $Logistic);
        return $this->company;
    }

    public function getAllCountWorkers
    {

    }

    //TODO method in ModelClass create department
    //TODO create departments in other class and send in company
}