<?php

namespace App;
use App\ModelClass;

class viewClass
{
    public function View(){
        $model=new ModelClass();
        $content=$model->getContent();
        $filter=new Filter();
        $all=$filter->FilltArray($content);
        echo '<pre>';
        var_dump($all);
        $countOfDepartments=count($content);
    }

}