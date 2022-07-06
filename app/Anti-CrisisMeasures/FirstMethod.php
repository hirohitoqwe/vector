<?php

namespace Crisis;
use App\Company;
use App\Department;
use App\viewClass;
use App\Generate;
use App\ModelClass;
use Jobs\Engineer;
use Jobs\Manager;
use Jobs\MarketingSpecialist;
use Jobs\Analyst;
class FirstMethod
{
    private $structure;

    public function __construct(array $structure){
        $this->structure=$structure;
    }

    public function unsetEngineers(){//удаляем инженеров из нашкй компании
        foreach ($this->structure as $department){
            $dep=$department->structure;
            $count=ceil ($department->getEngineersQuantity()*0.4);//округление в большую требуется по условию
            $head=$department->getDirector();
            $dismissed=0;
            foreach ($dep as $item){
                if ($dismissed==$count){
                    break;
                }
                if (get_class($item)=='Jobs\Engineer' and $item->status!='рук'){
                    unset($dep[array_search($item,$dep)]);
                    $dismissed++;
                }
            }
            $department->structure=$dep;

        }
    }
}