<?php

namespace Crisis;

use Jobs\Analyst;

class SecondMethod
{

    public function __construct(private array $structure){
    }

    public function changeGuide()//сменяемость власти происходит в данном моменте
    {
        foreach ($this->structure as $department){
            $head=$department->getDirector();
            if (!($head instanceof Analyst)){
                $department->unsetDirector();
                foreach ($department->structure as $worker){
                    if ($worker instanceof Analyst) {
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