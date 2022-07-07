<?php

namespace Crisis;

class ThirdMethod
{
    private $structure;

    public function __construct(array $structure){
        $this->structure=$structure;
    }

    public function upManager(){//удаляем инженеров из нашкй компании
        foreach ($this->structure as $department){
            echo 'RASHODY1'.$department->getExpenses().'</br>';
            $dep=$department->structure;
            $count=ceil($department->getManagerQuantity()*0.5);//округление в большую требуется по условию
            $upper=0;
            foreach ($dep as $worker){
                $rank=$worker->getRank();
                if ($count==$upper){
                    break;
                }
                if (get_class($worker)=='Jobs\Manager' and $rank<3){
                    $worker->setRank(++$rank);
                    $upper++;
                }
            }
            echo 'RASHODY'.$department->getExpenses().'</br>';
        }
    }
}