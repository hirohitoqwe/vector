<?php
require '../vendor/autoload.php';
use App\Company;
use App\Department;
use Jobs\Engineer;
use Jobs\Manager;
use Jobs\MarketingSpecialist;
use Jobs\Analyst;

$company=new Company();

$Sales=new Department();

$Procurement=new Department();

$Ads=new Department();

$Logistic=new Department();

$company->generateProcurementDep($Procurement);//ДЕПАРТАМЕНТ ЗАКУПОК
$company->generateSalesDep($Sales);//ДЕПАРТАМЕНТ ПРОДАЖ
$company->generateAdsDep($Ads);//ДЕПАРТАМЕНТ РЕКАЛМЫ
$company->generateLogisticsDep($Logistic);//ДЕПАРТАМЕНТ ЛОГИСТИКИ


?>