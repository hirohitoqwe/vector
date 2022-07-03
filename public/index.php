<?php
require '../vendor/autoload.php';
use App\Company;
use App\Department;
use Jobs\Engineer;
use Jobs\Manager;
use Jobs\MarketingSpecialist;
use Jobs\Analyst;

$company= new Company();

$Procurement=new Department();

$Sales=new Department();

$Ads=new Department();

$Logistic=new Department();

$company->generateProcurementDep($Procurement);
$company->generateSalesDep($Sales);
$company->generateAdsDep($Ads);
$company->generateLogisticsDep($Logistic);

?>