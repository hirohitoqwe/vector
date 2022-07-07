<?php

namespace Crisis;

class SecondMethod
{
    private $structure;

    public function __construct(array $structure){
        $this->structure=$structure;
    }

    public function changeGuide()
    {
        echo '<pre>';
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