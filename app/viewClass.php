<?php

namespace App;
use App\ModelClass;

class viewClass
{
    private function padRight($string, int $length): string
    {
        $times = $length - mb_strlen(strval($string));
        return $string . str_repeat(' ', $times >= 0 ? $times : 0);
    }

    private function padLeft($string, int $length): string
    {
        $times = $length - mb_strlen(strval($string));
        return str_repeat(' ', $times >= 0 ? $times : 0) . $string;
    }

    public function View(){
        $model=new ModelClass();
        $content=$model->getContent();
        $filter=new Filter();
        $all=$filter->FilltArray($content);
        $countOfDepartments=count($content);

        echo '<pre>';
        echo $this->padRight('Департамент', 11)
            .$this->padLeft('Расходы', 11)
            .$this->padLeft('Сотрудники', 11)
            .$this->padLeft('Кофе', 11)
            .$this->padLeft('Страницы', 11)
            .$this->padLeft('тугр./стр.', 11) . PHP_EOL;
        foreach ($content as $key=>$item) {
            echo $this->padRight($item['name'], 11)
                .$this->padLeft($item['income'], 11)
                .$this->padLeft($item['workers'], 11)
                .$this->padLeft($item['coffee'], 11)
                .$this->padLeft($item['pages'], 11)
                .$this->padLeft($item['mp'], 11) . PHP_EOL;
        }
        echo $this->padRight('Средне', 11)
            .$this->padLeft($all['sum']/$countOfDepartments, 11)
            .$this->padLeft($all['workers']/$countOfDepartments, 11)
            .$this->padLeft($all['coffee']/$countOfDepartments, 11)
            .$this->padLeft($all['pages']/$countOfDepartments, 11)
            .$this->padLeft($all['mp']/$countOfDepartments, 11) . PHP_EOL;
        echo $this->padRight('Всего', 11)
            .$this->padLeft($all['sum'], 11)
            .$this->padLeft($all['workers'], 11)
            .$this->padLeft($all['coffee'], 11)
            .$this->padLeft($all['pages'], 11)
            .$this->padLeft($all['mp'], 11) . PHP_EOL;
    }

}