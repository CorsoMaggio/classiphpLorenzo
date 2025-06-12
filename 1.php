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
