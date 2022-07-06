<?php

namespace App;
use App\Generate;
use App\Department;
use Crisis\FirstMethod;
class ModelClass
{
    private $content=[];
    private function Generate(){//генерация параметров и получение модели департаментов
         $generator=new Company();
         $departments=$generator->generateDepartments();
         $method=new FirstMethod($departments);
         $method->unsetEngineers();
         echo 'DAMP'.'</br>';
         var_dump($departments);
         return $departments;
    }
    private function setContent(){//сортировка департаментов по параметрам
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