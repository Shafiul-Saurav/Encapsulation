<?php

class Company
{
    public $companyName;
    public $location;
    private $empId;
    private $empName;
    private $empEmail;
    private $empSalary;

    private function setCompany(string $cName, string $cLocation)
    {
        $this->companyName = $cName;
        $this->location = $cLocation;
    }

    public function getCompany()
    {
        return 'The Company Name : ' . $this->companyName = 'iNiLabs' . 
        '<br>' . 'Location Is : ' . $this->location = 'House 18, Road 1, 
        Block C, Section 2, Mirpur, 1216, Dhaka' . '<br>';
    }

    private function setEmpInfo(int $empId, string $empName, string $empEmail, float $empSalary)
    {
        $this->empId = $empId;
        $this->empName = $empName;
        $this->empEmail = $empEmail;
        $this->empSalary = $empSalary;
    }

    public function getEmpInfo()
    {
        return 'The Employee ID : ' . $this->empId = 1004 . 
        '<br>' . 'Name : ' . $this->empName = 'Md. Shafiul Ghani Sabbee' . 
        '<br>' . 'Email : ' . $this->empEmail = 'shafiulsaurav8@gmail.com' . 
        '<br>' . 'Salary : ' . $this->empSalary = 30000.00;
    }

}

$company = new Company();
echo $company->getCompany();

$employee = new Company();
echo $employee->getEmpInfo();