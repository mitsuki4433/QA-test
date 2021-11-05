<?php

class Company{

  protected $name;

  public function setCompanyName($name){
    $this->name=$name;
  }
  public function getCompanyName(){
    return $this->name;
  }
}

$company=new Company();

$company->setCompanyName('ajsdkajdsh');
echo $company->getCompanyName();

?>