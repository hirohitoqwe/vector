<?php
require '../vendor/autoload.php';
use App\Company;
use App\Department;
use App\viewClass;
use App\Generate;
use App\ModelClass;
use Jobs\Engineer;
use Jobs\Manager;
use Jobs\MarketingSpecialist;
use Jobs\Analyst;

$view=new \App\viewClass();
$view->View();


?>