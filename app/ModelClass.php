<?php

namespace App;
use App\Generate;
use App\Department;
class ModelClass
{
    private $content=[];
    private function Generate(){
         $generator=new Generate();
         $departments=$generator->generateDepartments();
         return $departments;
     }
    public function setContent(){
        $departments=$this->Generate();
        foreach ($departments as $department){
            $this->content[]=[
                'name'=>$department->name,
                'income'=>(round($department->getExpenses())),
                'workers'=>($department->getCountWorkers()),
                'coffee'=>($department->getCoffee()),
                'pages'=>(round($department->getPages())),
                'mp'=>(round($department->getMiddleExpOn1Page()))
            ];

        }

    }

    public  function getContent(){
        $this->setContent();
        return $this->content;
    }

}