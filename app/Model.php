<?php

namespace App;

use App\Department;
use App\Generate;
use App\Company;
use Crisis\FirstMethod;
use Crisis\SecondMethod;
use Crisis\ThirdMethod;

class Model
{
    private $content = [];
    private $company;
    private $all;

    private function Generate()
    {//генерация параметров и получение модели департаментов
        $this->company = new Company();
        $departments = $this->createDepartments();
        $this->company->takeDepartments($departments);
        /*$firstMethod=new FirstMethod($departments);
        $firstMethod->unsetEngineers();
        $thirdMethod=new ThirdMethod($departments);
        $thirdMethod->upManager();
        $secondMethod=new SecondMethod($departments);//меняется зп аналитику
        $secondMethod->changeGuide();
        echo '<pre>';
        var_dump($departments);*/

        return $departments;
    }

    private function createDepartments()
    {
        $generate = new Generate();
        $employees = [];
        $Sales = new Department('Продажи');

        $Procurement = new Department('Закупки');

        $Ads = new Department('Рекламы');

        $Logistic = new Department('Логистики');

        $generate->generateProcurementDep($Procurement);//ДЕПАРТАМЕНТ ЗАКУПОК
        $generate->generateSalesDep($Sales);//ДЕПАРТАМЕНТ ПРОДАЖ
        $generate->generateAdsDep($Ads);//ДЕПАРТАМЕНТ РЕКАЛМЫ
        $generate->generateLogisticsDep($Logistic);//ДЕПАРТАМЕНТ ЛОГИСТИКИ
        array_push($employees, $Sales, $Procurement, $Ads, $Logistic);
        return $employees;
    }

    private function setContent()
    {//сортировка департаментов по параметрам
        $departments = $this->Generate();
        foreach ($departments as $department) {
            $this->content[] = [
                'name' => $department->name,
                'income' => (round($department->getExpenses())),
                'workers' => ($department->getCountWorkers()),
                'coffee' => ($department->getCoffee()),
                'pages' => (round($department->getPages())),
                'mp' => (round($department->getAverageExpensesPerPage()))
            ];

        }

    }


    private function setAllContent()
    {
        $this->all = [
            'sum' => (round($this->company->getTotalExpenses())),
            'workers' => ($this->company->getTotalCountWorkers()),
            'coffee' => ($this->company->getTotalExpenditureCoffee()),
            'pages' => (round($this->company->getTotalPages())),
            'mp' => (round($this->company->getTotalAverageExpensesPerPage()))
        ];

    }

    public function getContent()
    {
        $this->setContent();
        return $this->content;
    }

    public function getAllContent()
    {
        $this->setAllContent();
        return $this->all;
    }

    public function getCompany()
    {
        return $this->company;
    }
}