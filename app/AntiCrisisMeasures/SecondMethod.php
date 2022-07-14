<?php

namespace Crisis;

class SecondMethod
{

    public function __construct(private array $structure){
    }

    public function changeGuide()//сменяемость власти происходит в данном моменте
    {
        foreach ($this->structure as $department){
            $head=$department->getDirector();
            if (get_class($head)!='Jobs\Analyst'){
                $department->unsetDirector();
                foreach ($department->structure as $worker){
                    if (get_class($worker)=='Jobs\Analyst') {
                        $head = $worker;
                        if ($worker->getRank() > $head->getRank()) {
                            $head = $worker;
                        }
                    }
                }
                $department->setDirector($head);
            }
        }
    }

}