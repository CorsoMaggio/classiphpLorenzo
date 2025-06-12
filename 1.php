<?php
class Company
{
    public string $name;
    public string $site;
    public int $companyEmployees;

    public function __construct($name, $site, $companyEmployees = 0)
    {

        $this->name = $name;
        $this->site = $site;
        $this->companyEmployees = $companyEmployees;
    }
}

$company1 = new Company('Apple', 'Usa', '5');
$company2 = new Company('Olivetti', 'Italia', '0');
$company3 = new Company('Telefunken', 'Germania', '2');
$company4 = new Company('atet', 'canada', '6');
$company5 = new Company('xiaomi', 'Cina', '9');

print_r($company4);
