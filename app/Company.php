<?php
namespace App;
use App\Generate;
use Jobs\Analyst;
use Jobs\Engineer;
use Jobs\Manager;
use Jobs\MarketingSpecialist;

class Company
{

    public  $structure=[];
    //методы для генерации департаментов с рабочими
    public  function  generateProcurementDep(Department $dep)
    {
        for ($i=0;$i<9;$i++){
            $dep->addWorker(new Manager(1));
        }

        for ($i=0;$i<3;$i++){
            $dep->addWorker(new Manager(2));
        }

        for ($i=0;$i<2;$i++){
            $dep->addWorker(new Manager(3));
        }

        for ($i=0;$i<2;$i++){
            $dep->addWorker(new MarketingSpecialist(1));
        }

        $ruk=new Manager(2,'рук');
        $dep->addWorker($ruk);
        $this->structure[]=$dep;
    }//закупки

    public  function generateSalesDep(Department $dep)//продаж
    {
        for ($i=0;$i<12;$i++){
            $dep->addWorker(new Manager(1));
        }

        for ($i=0;$i<6;$i++){
            $dep->addWorker(new MarketingSpecialist(1));
        }

        for ($i=0;$i<3;$i++){
            $dep->addWorker(new Analyst(1));
        }

        for ($i=0;$i<2;$i++){
            $dep->addWorker(new Analyst(2));
        }

        $ruk=new MarketingSpecialist(2,'рук');
        $dep->addWorker($ruk);

        $this->structure[]=$dep;

    }

    public  function  generateAdsDep(Department $dep)//рекламы
    {
        for ($i=0;$i<15;$i++){
            $dep->addWorker(new MarketingSpecialist(1));
        }

        for ($i=0;$i<10;$i++){
            $dep->addWorker(new MarketingSpecialist(2));
        }

        for ($i=0;$i<8;$i++){
            $dep->addWorker(new Manager(3));
        }

        for ($i=0;$i<2;$i++){
            $dep->addWorker(new Engineer(1));
        }

        $ruk=new MarketingSpecialist(3,'рук');

        $dep->addWorker($ruk);

        $this->structure[]=$dep;

    }

    public  function  generateLogisticsDep(Department $dep)//Логистики
    {
        for ($i=0;$i<13;$i++){
            $dep->addWorker(new Manager(1));
        }

        for ($i=0;$i<5;$i++){
            $dep->addWorker(new Manager(2));
        }

        for ($i=0;$i<5;$i++){
            $dep->addWorker(new Engineer(1));
        }

        $ruk=new Manager(2,'рук');
        $dep->addWorker($ruk);

        $this->structure[]=$dep;

    }

}