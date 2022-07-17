<?php

namespace Crisis;
use Jobs\Manager;
class ThirdMethod
{

    public function __construct( private array $structure){
    }

    public function upManager(){//апаем менеджеров
        foreach ($this->structure as $department){
            $dep=$department->structure;
            $count=ceil($department->getManagerOneTwoRankQuantity()*0.5);//округление в большую требуется по условию
            $upper=0;
            foreach ($dep as $worker){
                $rank=$worker->getRank();
                if ($count==$upper){
                    break;
                }
                if (($worker instanceof Manager) and $rank<3){
                    $worker->setRank(++$rank);
                    $upper++;
                }
            }
        }
    }
}