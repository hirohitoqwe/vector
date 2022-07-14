<?php

namespace App;

class Filter
{
    public function FilltArray($array)
    {//метод можно сделать в компании метод getAllIncome
        $all = [
            'sum' => 0,
            'workers' => 0,
            'coffee' => 0,
            'pages' => 0,
            'mp' => 0
        ];
        foreach ($array as $key => $item) {
            $all['sum'] += $item['income'];
            $all['workers'] += $item['workers'];
            $all['coffee'] += $item['coffee'];
            $all['pages'] += $item['pages'];
            $all['mp'] += $item['mp'];
        }
        return $all;
    }
}