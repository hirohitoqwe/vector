<?php

namespace Crisis;

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
            foreach ($dep as $worker){
                if ($dismissed==$count){
                    break;
                }
                if (get_class($worker)=='Jobs\Engineer' and $worker->status!='рук'){
                    unset($dep[array_search($worker,$dep)]);
                    $dismissed++;
                }
            }
            $department->structure=$dep;

        }
    }
}