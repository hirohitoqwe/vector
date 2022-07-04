<?php

namespace App;

class Generate
{
    private  $department=[];

    public function  generateDepartments(){
        $company=new Company();

        $Sales=new Department('Продажи');

        $Procurement=new Department('Закупки');

        $Ads=new Department('Рекламы');

        $Logistic=new Department('Логистики');

        $company->generateProcurementDep($Procurement);//ДЕПАРТАМЕНТ ЗАКУПОК
        $company->generateSalesDep($Sales);//ДЕПАРТАМЕНТ ПРОДАЖ
        $company->generateAdsDep($Ads);//ДЕПАРТАМЕНТ РЕКАЛМЫ
        $company->generateLogisticsDep($Logistic);//ДЕПАРТАМЕНТ ЛОГИСТИКИ
        array_push($this->department,$Sales,$Procurement,$Ads,$Logistic);

        return $this->department;
    }

}