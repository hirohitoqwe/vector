<?php
namespace App;
use App\Generate;
use Jobs\Analyst;
use Jobs\Engineer;
use Jobs\Manager;
use Jobs\MarketingSpecialist;

class Company
{
    private $company=[];

    public function  generateDepartments(){//набор сотрудников в департаменты и сложение их в компанию
        $generate=new Generate();

        $Sales=new Department('Продажи');

        $Procurement=new Department('Закупки');

        $Ads=new Department('Рекламы');

        $Logistic=new Department('Логистики');

        $generate->generateProcurementDep($Procurement);//ДЕПАРТАМЕНТ ЗАКУПОК
        $generate->generateSalesDep($Sales);//ДЕПАРТАМЕНТ ПРОДАЖ
        $generate->generateAdsDep($Ads);//ДЕПАРТАМЕНТ РЕКАЛМЫ
        $generate->generateLogisticsDep($Logistic);//ДЕПАРТАМЕНТ ЛОГИСТИКИ
        array_push($this->company,$Sales,$Procurement,$Ads,$Logistic);
        return $this->company;
    }

}