<?php

namespace App;
use App\ModelClass;

class viewClass
{
    public function View(){
        $model=new ModelClass();
        $content=$model->getContent();

    }

}